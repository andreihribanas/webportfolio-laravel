
@extends('admin.layout')

@section('stylesheets')
  {!! Html::style('css/parsley.css') !!}
  {!! Html::style('css/select2.min.css') !!}

@endsection

@section('title', ' | Create new product')

@section('admin-content')

    <div class="container">

          <div class="row">
              <h1 class="text-center"> Create new project </h1>
          </div>

          <hr>

          <div class="row">
              <div class="col-md-10 offset-md-1">
                {!! Form::open(['route'=> 'projects.store', 'files' => true ]) !!}

                <div class="form-group">
                    <strong>{{ Form::label('name', 'Project name:') }}</strong>
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                    <strong>{{ Form::label('description', 'Project description:') }}</strong>
                    {{ Form::text('description', null, ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                    <strong>{{ Form::label('content', 'Project description:') }}</strong>
                    {{ Form::textarea('content', null, ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                    <strong>{{ Form::label('type', 'Type:') }}</strong>
                    {{ Form::text('type', null, ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                    <strong>{{ Form::label('complexity', 'Complexity: (1-5)') }}</strong>
                    {{ Form::text('complexity', null, ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                    <strong>{{ Form::label('tags', 'Production tools:') }}</strong>
                    <select class="form-control select2-multi" multiple="multiple" name="tags[]">
              					@foreach($tags as $tag)
              						<option value='{{ $tag->id }}'> {{ $tag->name }} </option>
              					@endforeach
            				</select>
                </div>

                <div class="form-group">
                    <strong>{{ Form::label('source_code', 'Source code:') }}</strong>
                    {{ Form::text('source_code', null, ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                    {{ Form::submit('Create project', ['class' => 'btn btn-lg btn-block btn-primary']) }}
                </div>

                {!! Form::close() !!}

              </div>
          </div>


    </div>
@endsection

@section('scripts')
	{!! Html::script('js/parsley.min.js') !!}
	{!! Html::script('js/select2.min.js') !!}

	<script type="text/javascript">
		$('.select2-multi').select2();
	</script>

  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

  <script type="text/javascript">
    tinymce.init({
      selector: 'textarea',
      plugins: 'link code',
      menubar: true
    });
  </script>
@endsection
