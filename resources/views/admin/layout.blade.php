@extends('layouts.main')

@section('content')


  <div class="jumbotron jumbotron-fluid jumbotron-top">
    <div class="container">
      <h3 class="display-1 text-center"> Web portfolio dashboard </h3>
      <br>
      <p class="lead text-center"> Welcome, {{ Auth::user()->name }} </p>
    </div>
  </div>

  <div class="container-fluid">
    <section>
      <div class="row">

            <!-- Admin dashboard panel -->
            <div class="col-md-2 admin-sidebar">
  <nav class="navbar">
              <h4 class="text-center"> <i class="fa fa-home" aria-hidden="true">  <a href="{{ route('admin.index') }}" class="dashboard"> <strong> DASHBOARD </strong> </i> </a> </h4>
                <div class="dropdown-divider"></div>
                <ul class="navbar-nav">
                  <a class="dropdown-item  {{ Request::is('admin/tags*') ? 'active' : '' }}" href="{{ route('tags.index') }}"> Tags </a> <div class="dropdown-divider"></div>
                  <li class="nav-item "><a class="dropdown-item {{ Request::is('admin/projects*') ? 'active' : '' }}" href="{{ route('projects.index') }}"> Projects </a> <div class="dropdown-divider"></div></li>
                  <a class="dropdown-item  {{ Request::is('admin/messages*') ? 'active' : '' }}" href="{{ route('messages.index') }}"> Messages </a><div class="dropdown-divider"></div>
                  <a class="dropdown-item {{ Request::is('admin/testimonials*') ? 'active' : '' }}" href="{{ route('testimonials.index') }}"> Testimonials </a><div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('logout') }}"> Logout </a>
</ul>
                <div class="dropdown-divider"></div>
              </nav>
            </div> <!-- end of admin dashboard panel -->

            <!-- Content page -->
            <div class="col-md-10">

              <!-- Display session flash messages -->
              <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                      @include('layouts._messages')
                  </div>
            </div> <!-- end of admin dashboard panel -->

            <div class="row">
                <div class="col-md-12">
                  @yield('admin-content')
                </div>
            </div>

      </div>
    </section>
  </div>


@endsection
