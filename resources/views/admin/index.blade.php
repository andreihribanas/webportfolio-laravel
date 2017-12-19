
@extends('admin.layout')

@section('title', ' | Admin dashboard')


    @section('admin-content-title', 'Stats overview')

    @section('admin-content')


          <div class="row">

              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 ">
                  <div class="card-header">
                        <div class="row">
                          <div class="col-md-3 col-xs-3 pull-left"> <i class="fa fa-book fa-5x" aria-hidden="true"></i> </div>
                          <div class="col-md-9 col-xs-9 huge pull-right">
                              <div class="text-right">  {!! count($projects) !!} </div>
                              <div class="text-right"> Projects </div>
                          </div>

                        </div>
                  </div>
                  <div class="card-block">
                    <a href="{{ route('projects.index') }}">
                        <span class="pull-left"> View details </span>
                        <span class="pull-right"> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> </span>
                        <span class="clearfix"></span>
                    </a>
                  </div>
              </div>

              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 ">
                  <div class="card-header">
                        <div class="row">
                          <div class="col-md-3 col-xs-3 pull-left"> <i class="fa fa-comments fa-5x" aria-hidden="true"></i> </div>
                          <div class="col-md-9 col-xs-9 huge pull-right">
                              <div class="text-right">  {!! count($messages) !!} </div>
                              <div class="text-right"> Messages </div>
                          </div>

                        </div>
                  </div>
                  <div class="card-block">
                    <a href="{{ route('messages.index') }}">
                        <span class="pull-left"> View details </span>
                        <span class="pull-right"> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> </span>
                        <span class="clearfix"></span>
                    </a>
                  </div>
              </div>



              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 ">
                  <div class="card-header">
                        <div class="row">
                          <div class="col-md-3 col-xs-3 pull-left"> <i class="fa fa-commenting-o fa-5x" aria-hidden="true"></i> </div>
                          <div class="col-md-9 col-xs-9 huge pull-right">
                              <div class="text-right">  {!! count($testimonials) !!} </div>
                              <div class="text-right"> Testimonials </div>
                          </div>

                        </div>
                  </div>
                  <div class="card-block">
                    <a href="{{ route('testimonials.index') }}">
                        <span class="pull-left"> View details </span>
                        <span class="pull-right"> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> </span>
                        <span class="clearfix"></span>
                    </a>
                  </div>
              </div>

              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 ">
                  <div class="card-header">
                        <div class="row">
                          <div class="col-md-3 col-xs-3 pull-left"> <i class="fa fa-tags fa-5x" aria-hidden="true"></i> </div>
                          <div class="col-md-9 col-xs-9 huge pull-right">
                              <div class="text-right">  {!! count($tags) !!} </div>
                              <div class="text-right"> Tags </div>
                          </div>

                        </div>
                  </div>
                  <div class="card-block">
                    <a href="{{ route('tags.index') }}">
                        <span class="pull-left"> View details </span>
                        <span class="pull-right"> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> </span>
                        <span class="clearfix"></span>
                    </a>
                  </div>
              </div>



          </div> <!-- end row -->

          <br><hr>
            <h1> Web metrics </h1>
          <hr><br>

          <!-- Google analytics reports -->
          <div class="row">

            <!-- Current and last week visitors report   -->
            <div class="col-md-6 ">
              <iframe width="600" height="371" seamless frameborder="0" scrolling="no" class="embed-responsive-item" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQDmJePIzepTg2ZjnDDJupiqn_mS6n_DxgH3j0__C9FzBgkW-bXZLDl6Pl05TPr33nFYvfuJWARW4YP/pubchart?oid=2064655937&amp;format=interactive"></iframe>
            </div>

          <!-- Top browsers report -->
          <div class="col-md-6">
            <iframe width="100%" height="100%" seamless frameborder="0" scrolling="no" class="embed-responsive-item" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQDmJePIzepTg2ZjnDDJupiqn_mS6n_DxgH3j0__C9FzBgkW-bXZLDl6Pl05TPr33nFYvfuJWARW4YP/pubchart?oid=979280422&amp;format=interactive"></iframe>
          </div>

          <!-- Visitor type report -->
          <div class="col-md-6">
            <iframe width="600" height="371" seamless frameborder="0" scrolling="no" class="embed-responsive-item" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQDmJePIzepTg2ZjnDDJupiqn_mS6n_DxgH3j0__C9FzBgkW-bXZLDl6Pl05TPr33nFYvfuJWARW4YP/pubchart?oid=1895309942&amp;format=interactive"></iframe>
          </div>

          <!-- Device category report -->
          <div class="col-md-6">
            <iframe width="600" height="371" seamless frameborder="0" scrolling="no" class="embed-responsove-item" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQDmJePIzepTg2ZjnDDJupiqn_mS6n_DxgH3j0__C9FzBgkW-bXZLDl6Pl05TPr33nFYvfuJWARW4YP/pubchart?oid=1613829504&amp;format=interactive"></iframe>
          </div>

          </div>



    @endsection
