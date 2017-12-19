@extends('admin.layout')

@section('title', ' | View message')

@section('admin-content')

  <div class="container">

    <div class="row">
        <div class="col-md-12">

            <div class="row">
              <div class="col-md-8">  <h1 class="text-center"> <strong>Message details</strong> </h1> </div>
              <div class="col-md-4">  <button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#sendReply"> Send reply </button> </div>
            </div>

            <hr>

            <br>

            {!! Form::model($message) !!}

              <div class="form-group">
                  {{ Form::label('sender', 'Name of the sender') }}
                  {{ Form::text('sender', null, ['class' => 'form-control', 'disabled' => 'true']) }}
              </div>

              <div class="form-group">
                  {{ Form::label('email', 'Email sent from') }}
                  {{ Form::text('email', null, ['class' => 'form-control', 'disabled' => 'true']) }}
              </div>

              <div class="form-group">
                  {{ Form::label('subject', 'Subject') }}
                  {{ Form::text('subject', null, ['class' => 'form-control', 'disabled' => 'true']) }}
              </div>

              <div class="form-group">
                  {{ Form::label('content', 'Message') }}
                  {{ Form::textarea('content', null, ['class' => 'form-control', 'disabled' => 'true']) }}
              </div>

            {!! Form::close() !!}
          </div>


    </div>


    <div class="modal fade" id="sendReply" tabindex="-1" role="dialog" aria-labelledby="sendReply" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header card-header">
            <h5 class="modal-title" id="sendReply"> Send message reply </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <div class="col-md-12 ">
                <h4 class="text-center"> <strong>Reply to user</strong> </h4>
                <hr>

                <br>

                {!! Form::open(['route' =>['messages.reply', $message->id], 'method' => 'POST']) !!}

                    {!! csrf_field() !!}

                    {{ Form::hidden('subject', $message->subject) }}
                    {{ Form::hidden('from', $message->email) }}

                      <div class="form-group">
                          {{ Form::label('reply', 'Reply message:') }}
                          {{ Form::textarea('reply', null, ['class' => 'form-control']) }}
                      </div>

                      <div class="form-group">
                          {{ Form::submit('Send reply', ['class' => 'btn btn-lg btn-block btn-primary']) }}
                      </div>
                {!! Form::close() !!}

          </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row">

          <div class="col-md-12 text-center">
            <h4> <strong> Message replies </strong> </h4>
            <hr>
          </div>

          @foreach ($replies as $reply)
            <div class="col-md-12">
                <div class="row reply">
                  <div class="col-md-1"> <i class="fa fa-comment-o fa-2x" aria-hidden="true"></i>  </div>
                  <div class="col-md-7"> {{ $reply->content }} </div>
                  <div class="col-md-2">  {{ date('d F Y', strtotime($reply->created_at)) }} </div>
                  <div class="col-md-2">  {{ $reply->message->email }} </div>
                </div>

                <br>
            </div>
          @endforeach
    </div>





  </div>


@endsection
