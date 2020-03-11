 <!DOCTYPE html>
<!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> -->
<html lang="{{ app()->getLocale() }}">
    <head>
          <style>
            html, body {
                background-color: lightgray;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <title>Search.com</title> 
        <title>WELCOME TO qenit online music store</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap core CSS -->
   
<link rel="stylesheet" href="https://maxcdn.botstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> 

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.botstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- <form action="{{URL::to('/search')}}" method="POST" role="search"> -->
    <form action="{{url('/search') }}" method="post">
        {{csrf_field() }}
        <div class="input_group">
            <input type="text" class="form-control" name="q" placeholder="Search users"> 
            <!-- <span class="input-group-btn"> -->
            <button type="submit" style="border:0px; height: 33px; margin-left: -3px">GO</button>
                <br>
<a class="blog-nav-item active" href="index.php">Home</a>
<!-- <a class="blog-nav-item pull-center" href="catagories.php">catagories</a> -->
<a class="blog-nav-item pull-right" href="New Release.blade.php">About</a>
             <a class="blog-nav-item pull-right" href="Top.php">contact</a>
            <!-- </span> -->
<!-- </div>
    </form>
    @if(isset($setails))
    <p>sothing <b> {{ $query }} </b> are :</p>
    <h1>sample user details:</h1>
    <table class="table table-stripped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
    @foreach($details as $user)
    <tr>
    <td>{{ $user->name }} </td>
    <td>{{ $user->email }} </td>
    </tr>
@endforeach
    </tbody>
    </table>
    </div>
    @elseif(isset($message))
    <p> {{ $message }} <p>
    @endif
    </div>
         --> -->

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          
         <!-- <a class="blog-nav-item" href="posts.php">All posts</a>-->
           
            
             <!--<a class="blog-nav-item pull-right" href="login.php">Log Out</a>-->
            
       
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
      <div class="logo"><img src="images/imh.png"></div>
        <h1 class="blog-title">  WELCOME TO qenit online music store</h1>
        <p class="lead blog-description">Album download and streaming</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

  
         <!-- <a class="blog-nav-item" href="posts.php">All posts</a>-->
           
             <!--<a class="blog-nav-item pull-right" href="login.php">Log Out</a>-->
            
       
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">  New release</h1>
       <a class="blog-nav-item pull-left" > <div class="logo"><img src="image/astu.jpg"></div></a>
       <!--<a class="blog-nav-item pull-left"><p>Checheho Aster Aweke</p></a>
-->
       
      <a class="blog-nav-item pull-center" ><div class="logo"><img src="image/imgbox1.jpg"></div> </a> 
         <a class="blog-nav-item pull-center" ><img src="image/gig.jpg"> </a>
            <a class="blog-nav-item pull-center" ><div class="logo"><img src="image/imgbox2.jpg""></div> </a>
            <a class="blog-nav-item pull-center" ><div class="logo"><img src="image/tedy.jpg"></div> </a>
            <a class="blog-nav-item pull-center" ><div class="logo"><img src="image/astu3.jpg"></div> </a>
      
       <!-- <h1 class="blog-title">  WELCOME TO qenit online music store</h1>
        <p class="lead blog-description">Album download and streaming</p>-->
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">
          </div><!-- /.blog-main -->

   <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">  top</h1>
       <a class="blog-nav-item pull-left" > <div class="logo"><img src="image/astu.jpg"></div></a>
       <!--<a class="blog-nav-item pull-left"><p>Checheho Aster Aweke</p></a>
-->
       
      <a class="blog-nav-item pull-right" ><div class="logo"><img src="image/imgbox1.jpg"></div> </a> 
         <a class="blog-nav-item pull-center" ><img src="image/gig.jpg"> </a>
            <a class="blog-nav-item pull-center" ><div class="logo"><img src="image/imgbox2.jpg""></div> </a>
            <a class="blog-nav-item pull-center" ><div class="logo"><img src="image/tedy.jpg"></div> </a>
            <a class="blog-nav-item pull-center" ><div class="logo"><img src="image/astu3.jpg"></div> </a>
      
       <!-- <h1 class="blog-title">  WELCOME TO qenit online music store</h1>
        <p class="lead blog-description">Album download and streaming</p>-->
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">
          </div><!-- /.blog-main -->


</div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            
            <p><?php echo $site_description ?? ''?></p>
            <!-- {{ $site_description ?? '' }} -->
          </div>
          <div class="sidebar-module">
            <!-- <h4>categories</h4> -->
        </body>    

    <div class="blog-footer">
    
      <p>Qenit online music streaming &copy; 2020</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script> -->
    <script src="js/bootstrap.js"></script>
 






        <!-- <title>Laravel</title> -->

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->

        <!-- Styles -->
      
    <!-- </head> -->
    <!-- <body> -->
      <!-- <form   -->




    <!-- </body> -->
    <!-- <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                   welcome to Qignit
                </div>

                <div class="links">
                    
                </div>
            </div>
        </div>
    </body> -->
    
</html> 
