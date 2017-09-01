

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> </title>

    <!-- Bootstrap CSS cdn link-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <!-- FontAwesome icons cdn link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>

        <div class="container-fluid">
            <div class="jumbotron jumbotron-fluid jumbotron-top">
                <h1 class="text-center"> <strong> Constantin Andrei Hribanas - web portfolio </strong> </h1>

                <br>
                <p class="lead text-center"> You have got a new mail </p>
            </div>
        </div>

        <div class="container">

            <div class="form-group">
                  <div class="col-md-12">
                        <h4><strong> Sender details </strong></h4> <br>
                        <p> <strong>Sender name:</strong> {{ $name}} </p>
                        <p> <strong>Email:</strong> {{$email}} </p>
                        <p> <strong>Contact number:</strong> {{ $phone_no }} </p>
                  </div>
            </div>

            <br>

            <div class="form-group">
                  <div class="col-md-12">
                        <h4> <strong>Subject:</strong> {{$subject}} </h4><br>
                  </div>
            </div>

            <br>

            <div class="form-group">
                <div class="col-md-12">
                    <h4> <strong> Message: </strong></h4><br>
                    <p>{!! $content !!}</p>
                </div>
            </div>

            <br>
        </div>

        <div class="container-fluid">
          <footer id="footer">
              <div class="jumbotron jumbotron-fluid jumbotron-border">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-12 text-center">
                              <h2> <strong> Thank you for your email. I will contact you soon.  </strong></h2> <br>


                              <hr><br>

                              <h6> <strong>&copy; 2016 </strong></h6>
                              <h6> <strong> DESIGNED BY ANDREI HRIBANAS </strong></h6>
                          </div>
                      </div>
                  </div>
              </div>
          </footer><!-- end of footer -->
        </div>


        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script async src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
        <script async src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script async src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>
