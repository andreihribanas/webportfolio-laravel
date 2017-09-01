@extends('layouts.main')

@section('title', ' | Show testimonial ')


@section('content')

<section>
  <div class="container">

      <div class="row">
          <div class="col-md-12 col-lg-12 text-center">
             <h1 class="section-heading"> Testimonial preview </h1>
             <hr><br><br><br>
          </div>



          <div class="col-md-4 offset-md-4">
              <h4 class="section-subheading text-muted text-center"> {{ $testimonial->description }} </h4>
              <p class="text-justify"> <i class="fa fa-quote-left" aria-hidden="true"></i> {{ $testimonial->message }}  <i class="fa fa-quote-right" aria-hidden="true"> </i> </p> <br>
              <h6 class="text-center"> <i class="fa fa-user-circle-o fa-5x" aria-hidden="true"></i> </h6> <br>
              <h6 class="text-center"> <strong>{{ $testimonial->author }} </strong> </h6>
              <h6 style="color:purple" class="text-center"> <strong>{{ $testimonial->role }} </strong> </h6> <br>
          </div>

      </div>
  </div>
</section>

@endsection
