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

              <div class="row">
                  @foreach ($projects as $project)
                    @if ($project->visible)
                        <div class="col-md-4 col-lg-4 col-xl-4"> <!--- PowerBuddies project -->
                            <div class="card" data-toggle="modal" data-target="#modal-project-{{$project->id}}">
                              <img class="card-img-top" src="https://www.andreihribanas.co.uk/images/logo.png" alt="Card image cap">
                                  <div class="card-block">
                                    <h3 class="card-title"> <strong> {{ $project->name }} </strong> </h3>
                                    <p class="card-text"> {{ $project->description }}. <br><br> Click on the card for more details! </p>

                                  </div>
                            </div>
                        </div> <!-- end of project -->

                        <div class="modal fade" id="modal-project-{{$project->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content modal-project-content">
                              <div class="modal-header card-header">
                                <h4 class="modal-title" id="exampleModalLongTitle"> {{ $project->name }}</h4>
                                <button type="button" class="btn btn-md pull-right btn-primary" data-dismiss="modal" aria-label="Close"> Close </button>
                              </div>

                              <div class="modal-body">

                                  <div class="row project-layout">
                                    <div class="project-left-panel col-md-3 text-justiy">
                                          <div class="form-group">
                                              <div class="row"> <h5 class="col-md-10 project-item-title"> <strong> Project type </strong>  </h5> </div>
                                              <div class="row panel-item text-center"> <div class="col-md-8 offset-md-2"> <strong> {{$project->type}} </strong> </div> </div>


                                          </div>

                                          <br>

                                          <div class="form-group">
                                              <h5 class="col-md-10 project-item-title"> <strong> Project complexity </strong> </h5>
                                              <div class="col-md-10 text-center panel-item">
                                                   {{-- <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> --}}

                                                    @if ($project->complexity)
                                                      <?php
                                                         $stars = '';
                                                          for ($i=0; $i < $project->complexity; $i++ ) {
                                                            $stars .= '<i class="fa fa-star"></i>';
                                                          }

                                                          for ($i=0; $i < 5- $project->complexity; $i++ ) {
                                                            $stars .= '<i class="fa fa-star-o"></i>';
                                                          }
                                                        ?>
                                                   @if ($stars) {!! $stars !!} @endif
                                                    @endif
                                              </div>
                                          </div>

                                          <br>

                                           <div class="form-group">
                                              <h5 class="col-md-10 project-item-title"> <strong> Production tools </strong> </h5>

                                               <div class="col-md-10 text-center panel-item">
                                                 @foreach ($project->tags as $tag)
                                                    <p class="badge badge-primary badge-pill"> {{ $tag->name }} </p>
                                                 @endforeach
                                               </div>
                                          </div>

                                          <br>

                                           <div class="form-group">
                                              <h5 class="col-md-10 project-item-title"> <strong> Source code </strong> </h5>
                                               <div class="col-md-10 text-center">
                                                  <span> <a href="{{$project->source_code}}" class="btn btn-sm btn-primary"> <strong> Github Repository</strong> </a> </span>
                                              </div>
                                          </div>

                                          <br>
                                    </div>



                                      <div class="col-md-8 project-right-panel">

                                          <div class="form-group"> <!-- Project description -->
                                              <h3 class="project-item-title"> <strong> Short description </strong> </h3> <br>
                                          </div>

                                          <div class="form-group"> <!-- Project images -->

                                            <div class="row">
                                                @foreach($project->images as $image)
                                                  <div class="col-md-4">
                                                    {{-- <a href="{{ asset('uploads/' . $image->filename)}}" data-lightbox="{{ str_replace(' ', '', $project->name) }}" data-title="{{ str_replace(' ', '', $project->name) }}">  {{ Html::image('uploads/' . $image->filename, null, ['class' => 'img-cont']) }} </a> --}}
                                                    <a href="{{ 'https://www.andreihribanas.co.uk/uploads/' . $image->filename}}" data-lightbox="{{ str_replace(' ', '', $project->name) }}" data-title="{{ str_replace(' ', '', $project->name) }}">  {{ Html::image('uploads/' . $image->filename, null, ['class' => 'img-cont']) }} </a>
                                                  </div>
                                                @endforeach
                                            </div>


                                          </div>

                                          <br>
                                          <div class="form-group text-justify project-description">

                                                 <p> {!! $project->content !!} </p>

                                              <br>

                                              <!-- <div class="row">
                                                 <div class="col-md-6">
                                                      <div class="row">
                                                          <a href="{{asset('/projects/savetigers') }}" class="btn btn-primary btn-lg"> <i class="fa fa-play" aria-hidden="true"></i>  Launch website </a>
                                                      </div>
                                                 </div>

                                                 <div class="col-md-6">
                                                     <a href="./projects/blog/" class="btn btn-primary btn-lg"> <i class="fa fa-book" aria-hidden="true"></i> Read more </a>
                                                 </div>
                                              </div> -->

                                          </div>

                                          <br>

                                    </div>
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>

                      @endif
                  @endforeach

              </div> <!-- end of row -->
          </div>


          <!-- <div class="modal fade" id="modal-project-{{$project->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content modal-project-content">
                <div class="modal-header card-header">
                  <h4 class="modal-title" id="exampleModalLongTitle"> {{ $project->name }}</h4>
                  <button type="button" class="btn btn-md pull-right btn-primary" data-dismiss="modal" aria-label="Close"> Close </button>
                </div>

                <div class="modal-body">
        <div class="container">
                    <div class="row">
                        <div class="col-md-4"> <strong>Type:</strong> {{ $project->type }} </div>
                        <div class="col-md-4">
                          <strong class="project-lef">Complexity:</strong>

                          {!! $stars !!}
                        </div>
                        <div class="col-md-4">
                          <strong>Production tools:</strong>
                          @foreach ($project->tags as $tag)
                             <span class="badge badge-primary badge-pill"> {{ $tag->name }} </span>
                          @endforeach </div>
                    </div>
<br>
                    <div class="row">
                        <div class="col-md-12">
                          <h3 class="text-center"><strong>Short description</strong> </h3><br>

                          @foreach($project->images as $image)
                            <div class="col-md-4">
                              <a href="{{ asset('./uploads/' . $image->filename)}}" data-lightbox="{{ str_replace(' ', '', $project->name) }}" data-title="{{ str_replace(' ', '', $project->name) }}">  {{ Html::image('uploads/' . $image->filename, null, ['class' => 'img-cont']) }} </a>
                            </div>
                          @endforeach
                        </div>

                        <br>

                        <div class="col-md-12 text-justity project-description"> <p> {!! $project->content !!} </p> </div>
                    </div>
<br>
                    <div class="row">
                          <div class="col-md-4"> <strong>Source code: </strong> </div>
                          <div class="col-md-4"> <strong>Read more: </strong> </div>
                          <div class="col-md-4"> <strong>Launch: </strong> </div>
                    </div>

    </div>

                </div>
              </div>
            </div>
          </div> -->


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
      </script>

@endsection
