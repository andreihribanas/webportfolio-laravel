
@extends('admin.layout')

@section('title', ' | Edit testimonial')

@section('admin-content')


  <div class="container">

      <div class="row col-md-8 offset-md-2">
          <h1> Edit testimonial </h1>
      </div>


      <hr> <br>

      <div class="row">
        <div class="col-md-8 offset-md-2">
          {!! Form::model($testimonial, ['route' => ['testimonials.update', $testimonial->id], 'method' => 'PUT']) !!}

          <div class="form-group">
            {{ Form::label('author', 'Author') }}
            {{ Form::text('author', null, ['class' => 'form-control'] ) }}
          </div>

          <div class="form-group">
            {{ Form::label('role', 'Job role') }}
            {{ Form::text('role', null, ['class' => 'form-control'] ) }}
          </div>

          <div class="form-group">
            {{ Form::label('description', 'Short description') }}
            {{ Form::text('description', null, ['class' => 'form-control'] ) }}
          </div>

          <div class="form-group">
            {{ Form::label('message', 'Message') }}
            {{ Form::textarea('message', null, ['class' => 'form-control'] ) }}
          </div>

          <div class="form-group">
            {{ Form::submit('Save changes', ['class' => 'btn btn-primary']) }}
          </div>
        </div>

        {!! Form::close() !!}
      </div>

    </div>


@endsection
