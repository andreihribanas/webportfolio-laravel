@extends('admin.layout')

@section('title', ' | Testimonials')

@section('admin-content')

  <div class="container-fluid">

      <div class="row">
          <div class="col-md-8 offset-md-1">
            <h1 class="text-center"> TESTIMONIALS DASHBOARD </h1>
          </div>

          <div class="col-md-3">
            <div class="col-md-3"> <button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#addTestimonial"> Add new testimonial </button> </div>
          </div>
      </div>

      <hr>

      <div class="row">
        <div class="col-md-12">
          <table class="table table-striped table-bordered  table-hover table-responsive">
              <thead class="text-center">
                    <th>ID</th>
                    <th>Author</th>
                    <th>Role</th>
                    <th>Description</th>
                    <th>Message</th>
                    <th>Visible</th>
                    <th></th>

              </thead>

              <tbody>
                  @foreach ($testimonials as $testimonial)
                  <tr>
                      <td> {{ $testimonial->id }} </td>
                      <td> {{ $testimonial->author }} </td>
                      <td> {{ $testimonial->role }} </td>
                      <td> {{ substr($testimonial->description, 0, 15) }}{{ strlen($testimonial->description) > 15 ? "..." : "" }}</td>
                      <td> {{ substr($testimonial->message, 0, 30) }} {!! strlen($testimonial->message) > 30 ? "..." : "" !!} </td>
                      <td> {{ $testimonial->visible ? "Yes" : "No" }} </td>
                      <td class="btn-group-sm">
                          <a href="{{ route('testimonials.show', $testimonial->id) }}" class="btn btn-sm btn-secondary"> Preview </a>
                          <a href="{{ route('testimonials.edit', $testimonial->id) }}" class="btn btn-sm btn-success"> Edit </a>
                          <a href="{{ route('testimonials.toggleVisible', $testimonial->id) }}" class="btn btn-sm btn-warning"> {{ $testimonial->visible ? "Mark as hidden" : "Mark as visible" }}</a>

                          {!! Form::open(array('route' => ['testimonials.destroy', $testimonial->id], 'method' => 'DELETE', 'class' => 'btn-inline')) !!}
            								{{ Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) }}
            							{!! Form::close() !!}
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
      </div>

        <div class="row">
          <div class="col-md-8 offset-md-2">
              {{ $testimonials->links() }}
          </div>
        </div>

  </div>

  <!-- Create new testimonial modal -->
  <div class="modal fade" id="addTestimonial" tabindex="-1" role="dialog" aria-labelledby="addTag" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header card-header">
          <h5 class="modal-title" id="addTestimonial"> Create new testimonial </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="card col-md-8 offset-md-2">

                <div class="card-block">
                  {!! Form::open(['route' => 'testimonials.store', 'method' => 'POST']) !!}

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
                    {{ Form::label('avatar', 'Avatar') }}
                    {{ Form::url('avatar', null, ['class' => 'form-control'] ) }}
                  </div>

                  <div class="form-group">
                    {{ Form::submit('Add new testimonial', ['class' => 'btn btn-primary btn-block']) }}

                  </div>

                  {!! Form::close() !!}
                </div>
           </div>

        </div>
      </div>
    </div>
  </div>


@endsection
