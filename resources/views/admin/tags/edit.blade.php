
@extends('admin.layout')

@section('title', ' | Edit product')

@section('admin-content')


  <div class="container">

      <div class="row col-md-8 offset-md-2">
          <h1> Edit tag </h1>
      </div>


      <hr> <br>

      <div class="row">
        <div class="col-md-8 offset-md-2">
          {!! Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT']) !!}

          <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}
          </div>

          <div class="form-group">
            {{ Form::submit('Save changes', ['class' => 'btn btn-primary']) }}
          </div>
        </div>

        {!! Form::close() !!}
      </div>

    </div>


@endsection
