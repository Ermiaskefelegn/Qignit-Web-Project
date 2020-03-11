  
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name ="viewport" content="width=device-width, initial-scale=1">
    


    <title>WELCOME TO Qignit @yield('title')</title>


    <!-- Bootstrap core CSS -->
    <link  rel="stylesheet"href="https://maxcdn.botstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-lq8mTJOASx8jlAu+a5WDVnPi2lkFfwwEAa8hDDdjzlpLegxhjVMElfgjWPCmKzs7" crossorigin="anonymous">

    @yield('stylesheets')
    <!--<link rel="stylesheet" type="text/css" href="styles.css" >-->
    

    
  </head>

  <body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="sbs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="iconbar"></span>
        <span class="iconbar"></span>
        <span class="iconbar"></span>
              </button>
              <a class="navbar-brand" href="#">qignit blog</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collpase-1">
              <ul class="navbar-nav">
              <li class="active">
                <a href="#">Home
                  <span class="sr-only">(current)</span></a></li>
                  <li><a href="/about">About</a></li>
                  <li><a href="/contact">Contact</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                        <li><a href="#"> Another Action</a></li>
                          <li><a href="#">something else</a></li>
                          <li role="separetor" class="divides"></li>
                          <li><a href="#">separated link</a></li>
                </li>
                
              </ul>
            </div>
          </div>
</nav>

    <div class="container">
    @yield('content')
<hr>
<p class="text-center">copyright -All right Reserved</p>
</div>
<script src="Https://ajax.googleapis.com/ajax/Libs/jquery/1.11.3/jquery.min.js"></script>

<script src="https://maxcdn.botstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-
0mSbJDEHialfmu88QP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"> </script>
 @yield('scripts')
</body>
</html>
