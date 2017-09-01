@extends('layouts.main')

@section('title', ' | Product ')


@section('content')

<section>
  <div class="container">

    <div class="row">
        <div class="col-md-12 col-lg-12 text-center">
           <br> <h1 class="section-heading"> Project {{ $project->name }} </h1>
            <h3 class="section-subheading text-muted"> {{ $project->description }} </h3> <br><br>
        </div>
    </div>



      <div class="row">
                <div class="col-md-4 col-lg-4 col-xl-4"> <!--- PowerBuddies project -->
                    <div class="card" data-toggle="modal" data-target="#modal-project-{{$project->id}}">
                      <img class="card-img-top" src="images/logo.png" alt="Card image cap">
                          <div class="card-block">
                            <h3 class="card-title"> <strong> {{ $project->name }} </strong> </h3>
                            <p class="card-text"> Presentation website for a green energy fictive company. <br><br> Click on the card for more details! </p>

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
                                      <h5 class="col-md-10 project-left-item"> <strong> Project type </strong>  </h5>
                                      <div class="col-md-10 text-center"> <strong> {{$project->type}} </strong> </div>
                                  </div>

                                  <br>

                                  <div class="form-group">
                                      <h5 class="col-md-10 project-left-item"> <strong> Project complexity </strong> </h5>
                                      <div class="col-md-10 text-center">
                                           {{-- <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> --}}
                                           <?php
                                               $stars = '';
                                                for ($i=0; $i < $project->complexity; $i++ ) {
                                                  $stars .= '<i class="fa fa-star"></i>';
                                                }

                                                for ($i=0; $i < 5- $project->complexity; $i++ ) {
                                                  $stars .= '<i class="fa fa-star-o"></i>';
                                                }
                                           ?>
                                           {!! $stars !!}
                                      </div>
                                  </div>

                                  <br>

                                   <div class="form-group">
                                      <h5 class="col-md-10 project-left-item"> <strong> Production tools </strong> </h5>

                                       <div class="col-md-10 text-center">
                                         @foreach ($project->tags as $tag)
                                            <span class="badge badge-primary badge-pill"> {{ $tag->name }} </span>
                                         @endforeach
                                       </div>
                                  </div>

                                  <br>

                                   <div class="form-group">
                                      <h5 class="col-md-10 project-left-item"> <strong> Source code </strong> </h5>
                                       <div class="col-md-10 text-center">
                                          <span> <a href="{{$project->source_code}}"> <strong> Github</strong> </a> </span>
                                      </div>
                                  </div>

                                  <br>
                            </div>



                              <div class="col-md-8 project-right-panel">

                                  <div class="form-group"> <!-- Project description -->
                                      <h3 class="project-left-item"> <strong> Short description </strong> </h3> <br>
                                  </div>

                                  <div class="form-group"> <!-- Project images -->

                                    <div class="row">
                                        @foreach($project->images as $image)
                                          <div class="col-md-4">
                                            <a href="{{ asset('uploads/' . $image->filename)}}" data-lightbox="{{ str_replace(' ', '', $project->name) }}" data-title="{{ str_replace(' ', '', $project->name) }}">  {{ Html::image('uploads/' . $image->filename, null, ['class' => 'img-cont']) }} </a>
                                          </div>
                                        @endforeach
                                    </div>


                                  </div>

                                  <br>
                                  <div class="form-group text-justify project-description">

                                           <p> {!! $project->content !!} </p>


                                      <div class="row">
                                         <div class="col-md-6">
                                              <div class="row"> <!---- Launch button -->
                                                  <a href="{{asset('/projects/savetigers') }}" class="btn btn-primary btn-lg"> <i class="fa fa-play" aria-hidden="true"></i>  Launch website </a>
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
