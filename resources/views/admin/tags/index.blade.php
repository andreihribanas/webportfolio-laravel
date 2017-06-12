@extends('admin.layout')

@section('title', ' | Tags')

@section('admin-content')


      <div class="container">

        <div class="row">
          <div class="col-md-6 offset-md-2">
              <h1> Tags </h1>
          </div>

          <div class="col-md-3"> <button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#addTag"> Add new tag </button> </div>
        </div>

        <hr>

    		<div class="row">
      			<div class="col-md-10 offset-md-1">
        				<table class="table table-striped table-bordered">
        					<thead>
        						<tr>
        							<th> # </th>
        							<th> Name </th>
        						</tr>
        					</thead>

        					<tbody>
        						@foreach ($tags as $tag)
        							<tr>
        								<th> {{ $tag->id }} </th>
        								<td> {{ $tag->name }} </td>
        								<td>
        									<a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-sm btn-success"> Edit </a>
                          {!! Form::open(array('route' => ['tags.destroy', $tag->id], 'method' => 'DELETE', 'class' => 'btn-inline')) !!}
                            {{ Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) }}
                          {!! Form::close() !!}
        								</td>
        							</tr>
        						@endforeach
        					</tbody>
        				</table>
      			</div> <!-- end of md-8 column -->
    		</div>

        <div class="col-md-8 offset-md-2">
            {{ $tags->links() }}
        </div>


        <div class="modal fade" id="addTag" tabindex="-1" role="dialog" aria-labelledby="addTag" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header card-header">
                <h5 class="modal-title" id="addTag"> Add new tag </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <div class="card col-md-8 offset-md-2">

                      <div class="card-block">
                        {!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}

                        <div class="form-group">
                          {{ Form::label('name', 'Tag name') }}
                          {{ Form::text('name', null, ['class' => 'form-control'] ) }}
                        </div>

                        <div class="form-group">
                          {{ Form::submit('Add new tag', ['class' => 'btn btn-primary btn-block']) }}

                        </div>

                        {!! Form::close() !!}
                      </div>
                 </div>

              </div>
            </div>
          </div>
        </div>


    	</div>


@endsection
