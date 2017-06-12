@extends('layouts.main')

@section('title', ' | Product ')


@section('content')

<section>
  <div class="container">

    <div class="row">
        <div class="col-md-12 col-lg-12 text-center">
           <br> <h1 class="section-heading"> Portfolio project preview </h1>
            <h3 class="section-subheading text-muted"> Click on the project cards to see details </h3> <br><br>
        </div>
    </div>

      <div class="row">

            <div class="col-md-8 offset-md-2"> <!--- PowerBuddies project -->
                <div class="card" data-toggle="modal" data-target="#modal-project-{{$project->id}}">
                  <img class="card-img-top" src="images/logo.png" alt="Card image cap">
                      <div class="card-block">
                        <h3 class="card-title"> <strong> {{ $project->name }} </strong> </h3>
                        <p class="card-text"> Presentation website for a green energy fictive company. <br><br> Click on the card for more details! </p>

                      </div>
                </div>

                <div class="row">
                    <a href="{{ route('projects.index') }}" class="btn btn-lg btn-block btn-primary"> Back to projects </a>
                </div>
            </div> <!-- end of project -->

            <div class="modal fade" id="modal-project-{{$project->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLongTitle"> {{ $project->name }}</h4>
                    <button type="button" class="btn btn-md pull-right btn-primary" data-dismiss="modal" aria-label="Close"> Close </button>
                  </div>

                  <div class="modal-body">

                      <div class="row project-layout">
                        <div class="project-left-panel col-md-3 text-justify">
                              <div class="row">
                                  <h5 class="col-md-10 project-left-item"> <strong> Project type </strong>  </h5>
                                  <div class="col-md-10 text-center"> <strong> {{$project->type}} </strong> </div>
                              </div>

                              <br>

                              <div class="row">
                                  <h5 class="col-md-10 project-left-item"> <strong> Project complexity </strong> </h5>
                                  <div class="col-md-10 text-center">
                                       {{-- <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> --}}
                                       <?php
                                       $stars = '';
                                        for ($i=0; $i < $project->complexity; $i++ ) {
                                          $stars .= '<i class="fa fa-star"></i>';
                                        }

                                       ?>
                                       {!! $stars !!}
                                  </div>
                              </div>

                              <br>

                               <div class="row">
                                  <h5 class="col-md-10 project-left-item"> <strong> Production tools </strong> </h5>

                                   <div class="col-md-10 text-center">
                                      {{$project->production_tools}}
                                   </div>
                              </div>

                              <br>

                               <div class="row">
                                  <h5 class="col-md-10 project-left-item"> <strong> Source code </strong> </h5> <br>

                                   <div class="col-md-10 text-center">
                                      <p> <a href="{{$project->source_code}}"> <strong> Github</strong> </a> </p>
                                  </div>
                              </div>

                              <br>
                        </div>



                          <div class="col-md-8 project-right-panel">

                              <div class="row"> <!---- Project description -->
                                  <h3 class="project-left-item"> <strong> Short description </strong> </h3> <br>
                              </div>

                              <div class="row"> <!---- Project images -->
                                  <div class="col-md-3">
                                    <a href="./images/projects/ESMS/login%20page.png" data-lightbox="powerbuddies" data-title="Login page">  Image to come </a>
                                  </div>
                              </div>

                              <br>
                              <div class="text-justify project-description">

                                       <p>  This project was created as coursework for the Business Systems module as part of a University project. </p>
                                       <br>
                                       <p> The theme was to create a presentation website of a fictive eco-friendly company that explains and transaction green energy products. </p>

                                       <p>
                                           This is the re-worked version of the website. It was drastically reduced in terms of webpages. Click to see the previous version of the website.
                                       </p>

                                  <div class="row">
                                     <div class="col-md-6">
                                          <div class="row"> <!---- Launch button -->
                                              <a href="./projects/PowerBuddies" class="btn btn-primary btn-lg"> <i class="fa fa-play" aria-hidden="true"></i>  Launch website </a>
                                          </div>
                                     </div>

                                     <div class="col-md-6">
                                         <a href="./projects/blog/" class="btn btn-primary btn-lg"> <i class="fa fa-book" aria-hidden="true"></i> Read more </a>
                                     </div>
                                  </div>

                              </div>

                              <br>

                        </div>
                    </div>

                  </div>

                </div>
              </div>
            </div>


      </div> <!-- end of row -->
  </div>
</section>

@endsection
