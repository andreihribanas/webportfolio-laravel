@extends('layouts.main')

@section('content')


  <div class="jumbotron jumbotron-fluid jumbotron-top">
    <div class="container">
      <h3 class="display-1 text-center"> Web portfolio dashboard </h3>

      <p class="lead text-center"> Laravel 5.4 features. Stay tuned!</p>
    </div>
  </div>

  <div class="container-fluid">
    <section>
      <div class="row">

            <!-- Admin dashboard panel -->
            <div class="col-md-2 admin-sidebar">

              <h4 class="text-center"><i class="fa fa-home" aria-hidden="true"> <strong> DASHBOARD </strong> </i></h4>
                <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="/admin/index"> Stats overview </a> <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('tags.index') }}"> Tags </a> <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('projects.index') }}"> Projects </a> <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('messages.index') }}"> Messages </a><div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('logout') }}"> Logout </a>

                <div class="dropdown-divider"></div>
            </div> <!-- end of admin dashboard panel -->

            <!-- Content page -->
            <div class="col-md-10">

              <!-- Display session flash messages -->
              <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                      @include('layouts._messages')
                  </div>

              @yield('admin-content')
            </div> <!-- end of admin dashboard panel -->

      </div>
    </section>
  </div>


@endsection
