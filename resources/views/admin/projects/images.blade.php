
@extends('admin.layout')

@section('stylesheets')
  {!! Html::style('css/parsley.css') !!}
  {!! Html::style('css/select2.min.css') !!}

  <!-- Lightbox css -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.9.0/css/lightbox.css">

@endsection

@section('title', ' | Manage project images')

@section('admin-content')

    <div class="container">

        <div class="row">
            <div class="col-md-12">
               <h1 class="text-center"> Add product images </h1>
            </div>
        </div> <!-- end of row -->

        <hr>

        <div class="row">
          <div class="col-md-6">
              {!! Form::open(['route'=> 'projects.images.upload', 'files' => true, 'enctype' => 'multipart/form-data' ]) !!}

                  {{ Form::hidden('project_id', $project->id) }}

                  <div class="form-group">
                      <strong>{{ Form::label('name', 'Product name:') }}</strong>
                      {{ Form::text('name', $project->name, ['class' => 'form-control', 'disabled' => true]) }}
                  </div>

                  <div class="form-group">
                      <strong>{{ Form::label('project_image', 'Product display image:') }}</strong>
                      {{ Form::file('images[]', ['class' => 'form-control', 'multiple' => true]) }}
                  </div>

                  <div class="form-group">
                      {{ Form::submit('Save images', ['class' => 'btn btn-lg btn-block btn-primary']) }}
                  </div>

              {!! Form::close() !!}
          </div> <!-- end of form container -->

          <div class="col-md-5 offset-md-1">
              <h3> Existing images </h3>
              <hr>

              <div class="row">
                  @foreach($project->images as $image)
                    <div class="col-md-3">
                        <a href="{{ asset('uploads/' . $image->filename)}}" data-lightbox="{{ str_replace(' ', '', $project->name) }}" data-title="{{ str_replace(' ', '', $project->name) }}"> {{ HTML::image('uploads/' . $image->filename, null, ['class' => 'img-cont']) }} </a>

                        {!! Form::open(['route' => ['projects.image.delete', $image->id], 'method' => 'DELETE']) !!}
                            {{ Form::submit('Delete', ['class' => 'btn btn-sm btn-block btn-danger bt']) }}
                        {!! Form::close() !!}
                    </div>
                  @endforeach
              </div>

          </div>

        </div> <!-- end of row -->
    </div> <!-- end of container-->
@endsection

@section('scripts')
	{!! Html::script('js/parsley.min.js') !!}
	{!! Html::script('js/select2.min.js') !!}

  <!-- Lightbox js script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.9.0/js/lightbox.js"></script>

	<script type="text/javascript">
		$('.select2-multi').select2();
	</script>
@endsection
