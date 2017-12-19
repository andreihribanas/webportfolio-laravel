@extends('layouts.main')

@section('title', ' | Portfolio page')

@section('stylesheets')
      <!-- Lightbox css -->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.9.0/css/lightbox.css">
@endsection

@section('content')

  <!--  PORTFOLIO SECTION    ------------------------------------------------------->
  <section id="portfolio">

          <div class="row">
              <div class="col-md-12 col-lg-12 text-center">
                 <br> <h1 class="section-heading"> Portfolio </h1>
                  <h3 class="section-subheading text-muted"> Click on the project cards to see details </h3> <br><br>
              </div>
          </div>


          <!-- Announcement container -->
          <div class="row">
              <div class="container-fluid">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 alert alert-info" role="alert">
                      <strong> More projects will soon be displayed on the stack, currently under development.  </strong>
                  </div>
              </div>
          </div>


          <div class="container">

            <!-- Individual projects cards -->
              <div class="row">
                  @foreach ($projects as $project)
                    @if ($project->visible)
                        <div class="col-md-4 col-lg-4 col-xl-4">
                            <div class="card" data-toggle="modal" data-target="#moda-project-{{$project->id}}" id="{{$project->id}}" onclick="getProject(this.id)">
                              <img class="card-img-top" src="images/logo.png" alt="Card image cap">
                                  <div class="card-block">
                                    <h3 class="card-title"> <strong> {{ $project->name }} </strong> </h3>
                                    <p class="card-text"> {{ $project->description }}. <br><br> Click on the card for more details! </p>

                                  </div>
                            </div>
                        </div> <!-- end of project -->

                      @endif
                  @endforeach

              </div> <!-- end of individual projects listing -->

            <!-- Project content -->
              <div class="row">
                <div class="col-md-12 text-center" id="project-content"> </div>
              </div>


          </div>

</section>
@endsection


@section('scripts')

      <!-- Lightbox js script -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.9.0/js/lightbox.js"></script>

      <script type="text/javascript">

          lightbox.option({
             'resizeDuration': 1000,
                 'wrapAround': true,
              'maxWidth': 20000,
              'maxHeigth': 20000
         });


          function getProject(id) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
              });


              $.ajax({

                  type: 'POST',
                  url: '{{ URL::route('portfolio.getProject')  }}',
                  data: {
                    'id': id
                  },
                  dataType: 'json',
                  before: function(data){
                    alert('loading');
                  },
                  success: function(data){

                    let getProjectTools = function(){
                        for(let i=0; i < data.tools[0].tags.length; i++){
                            $('.tags').append(`<p class="badge badge-primary badge-pill">  ${data.tools[0].tags[i].name}  </p>`);
                          }
                    }

                    let getImages = function(){
                          for(let i=0; i < data.images.length; i++) {
                              $('.images').append(` <div class="col-md-6"> <a href="uploads/${data.images[i].filename}" data-lightbox="${data.project[0].name} (ajax)" data-title="${data.project[0].name} (ajax)"> <img src="uploads/${data.images[i].filename}" class="img-cont" alt="" /> </a> </div>`);
                          }
                    }

                    let getComplexity = function(){
                          let complexityStars = '';

                          for (let i=0; i < data.project[0].complexity; i++ ) {
                            complexityStars += '<i class="fa fa-star"></i>';
                          }

                          for (let i=0; i < 5- data.project[0].complexity; i++ ) {
                            complexityStars += '<i class="fa fa-star-o"></i>';
                          }

                          $('.complexity').append(complexityStars);
                    }

                  let content =`
                    <div class="project-wrapper">

                        <!-- Title and description row  -->
                        <div class="row project-container">
                          <div class="col-md-10 text-center">  <strong> `+ data.project[0].name + ` - ` + data.project[0].description + ` </strong> </div>
                          <div class="col-md-2"> <button type="button" id="hideProject" class="btn btn-md pull-right btn-primary"> Close </button></div>
                        </div> <!-- end of title row -->

                        <!-- Project details row -->
                        <div class="row project-container">
                          <div class="col-md-4 pjd">  <strong> Project type: </strong> `+ data.project[0].type +`  </div>
                          <div class="col-md-4 pjd complexity">  <strong> Complexity: </strong>  </div>
                          <div class="col-md-4 pjd tags"> <strong> Project tools:

                           </strong>  </div>
                        </div> <!-- end of second row -->


                        <!-- Project content -->
                        <div class="row project-container">

                            <!-- Project description and details -->
                            <div class="col-md-8">
                              <div class="row project-content">
                                <div class="col-md-10">  `+ data.project[0].content +`  </div>
                              </div>
                            </div> <!-- end of project details -->

                            <!-- Project images -->
                            <div class="col-md-4">
                                <div class="row images"> </div>
                          </div> <!-- end of project images -->
                      </div> <!-- end of project content -->

                          <!-- Source code row -->
                          <div class="row project-container">
                            <div class="col-md-12 pjd">  <strong> Source code: </strong> <a href=" ${data.project[0].source_code}"  > `+ data.project[0].source_code +`  </a>  </div>
                          </div> <!--end of source code -->

                      </div> <!-- end of project wrapper --> `;

                      // Display project content to DOM
                      $('#project-content').html('');
                      $('#project-content').append(content);
                      $('#project-content').append(getProjectTools);
                      $('#project-content').append(getComplexity);
                      $('#project-content').append(getImages);

                      moveToElement('project-content');

                      // Hide project function
                      $('#hideProject').on('click', function(){
                          $('.project-wrapper').hide();
                      });


                  },
                  error: function (request, status, error) {
                      alert(request.responseText);
                  }
              });

          }

      </script>

@endsection
