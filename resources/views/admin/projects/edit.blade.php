
@extends('admin.layout')

@section('title', ' | Edit project')

@section('stylesheets')
	 {!! Html::style('css/select2.min.css') !!}
@endsection

@section('admin-content')


    <div class="container">

      <div class="col-md-8 offset-md-2">

          <div class="row">
              <h1> Edit project </h1>
          </div>

          <hr>

            {!! Form::model($project, ['route'=> ['projects.update', $project->id], 'method' => 'PUT', 'files' => true]) !!}

            <div class="form-group">
                <strong>{{ Form::label('name', 'Project name:') }}</strong>
                {{ Form::text('name', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                <strong>{{ Form::label('description', 'Project description:') }}</strong>
                {{ Form::text('description', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                <strong>{{ Form::label('content', 'Project content:') }}</strong>
                {{ Form::textarea('content', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                <strong>{{ Form::label('type', 'Type:') }}</strong>
                {{ Form::text('type', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                <strong>{{ Form::label('complexity', 'Complexity:') }}</strong>
                {{ Form::text('complexity', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                <strong>{{ Form::label('tags', 'Tags:') }}</strong>
                {!! Form::select('tags[]', $tags2, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple'])  !!}
            </div>

            <div class="form-group">
                <strong>{{ Form::label('source_code', 'Source code:') }}</strong>
                {{ Form::text('source_code', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::submit('Save changes', ['class' => 'btn btn-lg btn-success btn-block']) }}
            </div>

            {!! Form::close() !!}


      </div>

    </div>
@endsection


@section('scripts')
	{!! Html::script('js/select2.min.js') !!}

	<script type="text/javascript">
		$('.select2-multi').select2();
		$('.select2-multi').select2().val({!! json_encode($project->tags->pluck('id')) !!}).trigger('change');
	</script>

	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

  <script type="text/javascript">
    tinymce.init({
      selector: 'textarea',
      plugins: 'link code',
      menubar: false
    });
  </script>
@endsection
