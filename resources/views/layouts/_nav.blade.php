
      <!--  Top Navigation bar -->
      <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-primary" id="nav">
             <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"> </i> </span>
             </button>

            <a class="navbar-brand" href="{{ route('home') }}"><img src="/images/logo-min.png" class="img-responsive logo"></a>
            <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item {{ Request::is('home#about') ? 'active' : '' }}"> <a class="nav-link" href="{{ url('/home#about') }}"> About </a> </li>
                  <li class="nav-item {{ Request::is('home#services') ? 'active' : '' }}"> <a class="nav-link" href="{{ url('/home#services') }}"> Services </a></li>
                  <li class="nav-item {{ Request::is('home#skills') ? 'active' : '' }}"> <a class="nav-link" href="{{ url('/home#skills') }}"> Skills </a></li>
                  <li class="nav-item {{ Request::is('home#education') ? 'active' : '' }}"> <a class="nav-link" href="{{ url('/home#education') }}"> Education </a></li>
                  @if (count(App\Testimonial::where('visible', '=', 1)->get()) > 0)
                        <li class="nav-item {{ Request::is('home#testimonials') ? 'active' : '' }}"> <a class="nav-link" href="{{ url('/home#testimonials') }}"> Testimonials </a></li>
                  @endif
                  <li class="nav-item {{ Request::is('portfolio') ? 'active' : '' }}"> <a class="nav-link" href="{{ route('portfolio') }}"> Portfolio </a></li>
                  <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}"><a class="nav-link" href="{{ route('contact') }}"> Contact </a></li>
                </ul>
              </div>
          </nav>
