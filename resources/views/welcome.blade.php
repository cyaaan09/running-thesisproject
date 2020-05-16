<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CCIS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="{{ asset('css/welcome.min.css') }}">
    </head>
    <body>
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i> CCIS || Scheduling</a>
                  @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a  href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
              </li>
            </ul>
        </nav>
         <header>
              <div class="overlay"></div>
              <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="/video/background1.mp4" type="video/mp4">
              </video>
                <div class="row">
                    <div class="container h-100 "><br><br><br>
                        <div class="d-flex h-100 text-center align-items-center">
                          <div class="w-100 text-white">
                                <div class="title">
                                    <h1 class="display-3">EFFICIENT ROOM </h1>
                                    
                                    <h1 class="display-3" >SCHEDULING </h1>
                                      
                                    <h1 class="display-3">System</h1>
                                </div>
                                <div class="footer">
                                     <p class="lead mb-0">Caraga State University, All Rights Reserved.</p>
                                     <p class="lead mb-0">Ampayon, Butuan City, Philippines 8600</p>
                                </div>
                          </div>
                        </div>
                    </div>
                </div>
        </header>
    </body>
</html>
