<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Web portfolio @yield('title') </title>

        <!-- Bootstrap CSS cdn link-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        
        <!-- FontAwesome icons cdn link -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Local style sheet file -->
        <link href="{{ asset('css/main.css') }}" media="all" rel="stylesheet" type="text/css">

    		<!-- Load other css files -->
    		@yield('stylesheets')

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110976184-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-110976184-1');
        </script> <!-- end ga -->
    </head>

    <body>

        <!-- Top navigation bar -->
        @include('layouts._nav')

        <!-- Page custom content -->
            @yield('content')

          <!-- ~Footer Jumbotron  -->
            <footer id="footer">
                <div class="jumbotron jumbotron-fluid jumbotron-border">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h2 style="color: #0275D8;"> <strong> GET IN TOUCH!  </strong></h2> <br>

                                <hr >
                                    <div class="text-center center-block">
                                        <br>
                                        <div class="footer-links"><a href="https://www.linkedin.com/in/constantin-andrei-hribanas-21169182?trk=nav_responsive_tab_profile"><i class="fa fa-linkedin-square fa-3x social"></i></a></div>
                                       <div class="footer-links"> <a href="http://steamcommunity.com/id/andreihribanas/"><i class="fa fa-steam-square fa-3x" aria-hidden="true"></i></a></div>
                                       <div class="footer-links"> <a href="https://github.com/andreihribanas"><i class="fa fa-github fa-3x" aria-hidden="true"></i></a></div>
                                       <div class="footer-links"> <a href="https://codepen.io/andreihribanas/"><i class="fa fa-codepen fa-3x" aria-hidden="true"></i></a></div>
                                       <div class="footer-links"> <a href="https://www.freecodecamp.com/andreihribanas"><i class="fa fa-free-code-camp fa-3x" aria-hidden="true"></i></a></div>
                                    </div>

                                <hr>

                                <span id="siteseal"><script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=KrkNYkVV7cOqVW0Ln5KHVrmA0NrOIb1LJ0FT4mmU6N0e88BNSgpImjBTrhw0"></script></span>

                                <hr><br>

                                <h6> <strong>&copy; 2016 </strong></h6>
                                <h6> <strong> DESIGNED BY ANDREI HRIBANAS </strong></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </footer><!-- end of footer -->

            <!-- Mcafee icon -->
            <script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>

            <!-- jQuery first, then Tether, then Bootstrap JS. -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

            <!--  JQuery flip plugin -->
            <script  src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>

            <!-- Load other internal or custom script files. -->
            <script  src="/js/app.js"></script>

            @yield('scripts')

    </body>
</html>
