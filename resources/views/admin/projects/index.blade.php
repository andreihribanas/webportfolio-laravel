@extends('admin.layout')

@section('title', ' | Projects')

@section('admin-content')

  <div class="container">

    <div class="row">
      <div class="col-md-8 offset-md-1">
        <h1 class="text-center"> PROJECTS DASHBOARD </h1>
      </div>

      <div class="col-md-3">
        <a href="{{ route('projects.create') }}" class="btn btn-primary btn-lg btn-block"> Create new project </a>
      </div>

    </div>


      <hr>
    </div>

    <table class="table table-striped table-bordered  table-hover table-responsive">
        <thead class="text-center">
              <th>ID</th>
              <th>Name</th>
              <th>Description</th>
              <th>Type</th>
              <th>Complexity</th>
              <th>Tags</th>
              <th>Source code</th>
              <th>Images</th>
              <th>Visible</th>
              <th></th>

        </thead>

        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td> {{ $project->id }} </td>
                <td> {{ $project->name }} </td>
                <td> {{ substr($project->description, 0, 15) }}{{ strlen($project->description) > 15 ? "..." : "" }}</td>
                {{-- <td> {{ $project->image }} </td> --}}
                <td> {{ $project->type }} </td>
                <td> {{ $project->complexity }} </td>
                <td>
                  @foreach ($project->tags as $tag)
        						<span class="badge badge-default badge-pill"> {{ $tag->name }} </span>
        					@endforeach
                </td>
                <td> {{ $project->source_code }} </td>
                <td> {{ count($project->images) }} </td>
                <td> {{ $project->visible ? "Yes" : "No" }} </td>
                <td class="btn-group-sm">
                    <a href="{{ route('projects.show', $project->id) }}" class="btn btn-sm btn-secondary"> Preview </a>
                    <a href="{{ route('projects.images', $project->id) }}" class="btn btn-sm btn-info"> Manage images </a>
                    {{-- <a href="{{ route('images.show', $product->id) }}" class="btn btn-sm btn-info"> Add more images </a> --}}
                    <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-sm btn-success"> Edit </a>
                    <a href="{{ route('projects.toggleVisible', $project->id) }}" class="btn btn-sm btn-warning"> {{ $project->visible ? "Mark as hidden" : "Mark as visible" }}</a>

                    {!! Form::open(array('route' => ['projects.destroy', $project->id], 'method' => 'DELETE', 'class' => 'btn-inline')) !!}
      								{{ Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) }}
      							{!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="col-md-8 offset-md-2">
        {{ $projects->links() }}
    </div>

@endsection
