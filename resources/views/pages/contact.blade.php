@extends('layouts.main')

@section('title', ' | Contact page')

@section('content')
  
          <section id="contact">
                  <div class="container">

                      <div class="row">
                          <div class="col-lg-12 text-center">
                         <br> <h1 class="section-heading"> Contact me</h1>
                          <h3 class="section-subheading text-muted"> Please insert your details in the following fields to send a message </h3> <br><br>
                          </div>
                      </div>

                      <!-- Display session flash messages -->
                      <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12">
                              @include('layouts._messages')
                          </div>
                      </div>

                      {!! Form::open(['route' => 'contact.send', 'method' =>  'POST']) !!}
                          <div class="row">
                              <!-- Create the first column -->
                              <div class="col-md-6 text-center">

                                  <div class="form-group">
                                      {{ Form::text('name', null, ['class' => 'contact-form-control form-control', 'placeholder' => 'Insert your name*']) }}
                                  </div>

                                  <div class="form-group">
                                      {{ Form::email('email', null, ['class' => 'contact-form-control form-control', 'placeholder' => 'Insert your email*']) }}
                                  </div>

                                  <div class="form-group">
                                      {{ Form::text('phone_no', null, ['class' => 'contact-form-control form-control', 'placeholder' => 'Insert your phone number*']) }}
                                  </div>
                              </div>


                              <!-- Create the second column -->
                               <div class="col-md-6">
                                   <div class="form-group">
                                      {{ Form::text('subject', null, ['class' => 'contact-form-control form-control', 'placeholder' => 'Insert the message subject*']) }}
                                  </div>

                                   <div class="form-group">
                                       {{ Form::textarea('content', null, ['class' => 'contact-form-control form-control', 'size' => '10x5', 'placeholder' => 'Insert your message*']) }}
                                  </div>
                              </div>


                              <!-- Create submit button -->
                              <div class="col-lg-12">
                                  {{ Form::submit('Send message', ['class' => 'btn btn-lg btn-block btn-primary']) }}
                              </div>
                          </div>
                      </form>

                      <br> <br> <br><br>


                  </div>
      </section>
@endsection
