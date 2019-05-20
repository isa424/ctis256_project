<!DOCTYPE html>
<html style = "background-image:url('images/grayBg.png'); min-height: 100%;
background-repeat: no-repeat;
background-attachment: fixed;
background-position: center;
background-size: cover;" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ConnectYou') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/friendslist.css') }}" rel="stylesheet">
    <link href="{{ asset('css/interaction.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bg.css') }}" rel="stylesheet">
    <link href="{{ asset('css/noti.css') }}" rel="stylesheet">


    <link rel = "stylesheet" href = "{{ URL::to('src/css/db.css') }}">
</head>
<body>
    <div id="app">
        <nav id = "navbar-custom" class="navbar navbar-expand-md navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    ConnectYou
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    @if (Route::has('register'))
                    <ul class="navbar-nav ml-auto";> 


                    </ul>
                    @endif                
                    <!-- Notification Br -->
                    <ul class="navbar-nav ml-auto " style="text-align:center;">
                        <!-- Authentication Links -->

                        @guest
                        
                        
                        @else
                        <li class="nav-item dropdown col-md-12" style = "text-align: center; display:inline-block;">
                           <a style = "font-size:80%; color: red">unread:3</a>
                           <a id="navbarDropdown" style ="font-size:200% ;display:inline-block;" class="nav-link dropdown-toggle fas fa-envelope" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> 

                           </a>
                           <ul class="dropdown-menu notify-drop col-md-12"> 
                            <div class="notify-drop-title">
                                <div class="row">


                                </div>
                            </div>
                            <!-- end notify title -->
                            <!-- notify content -->
                            <div class="drop-content">
                                <li>
                                    <div class="col-md-12 col-sm-12 col-xs-12"><div class="notify-img"><img src="images/friend_icons/friend-1.png" alt="" width = "35"></div></div>
                                    <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href=""><b>Daniyal Admaney</b></a> has sent you a friend request!<br> 
                                        <a style = "color:#008000; font-size:70%;" class="fas fa-user-plus" href=""> Accept Request</a> <a class="rIcon"></a>
                                        <a style = "color:#ff0000; font-size:70%" class="fas fa-times-circle" href=""> Reject Request</a> <a class="rIcon"></a>
                                        <hr>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-md-12 col-sm-12 col-xs-12"><div class="notify-img"><img src="images/friend_icons/friend-2.png" alt="" width = "35"></div></div>
                                    <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href=""><b>Isa Ishangulyevv</b></a> has accepted your friend request!<br> 
                                        <a style = "font-size:70%" href=""><b>Visit Profile</b></a> <a class="rIcon"></a>
                                        <hr>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-md-12 col-sm-12 col-xs-12"><div class="notify-img"><img src="images/friend_icons/friend-3.png" alt="" width = "35"></div></div>
                                    <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href=""><b>Muhammad Faran</b></a> has removed you as friend.<br> 

                                        <hr>
                                    </div>
                                </li>
                            </div>

                        </ul>
                    </li>
                    @endguest
                </ul>

                <ul class="nav navbar-nav navbar-right">


                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->

                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                          <a class="dropdown-item" href="home"
                          >
                          {{ __('Home Page') }}
                      </a>

                      <a class="dropdown-item" href="friendslist"
                      >
                      {{ __('Friends List') }}
                  </a>

                  <a class="dropdown-item" href="search"
                  >
                  {{ __('Search People') }}
              </a>





              <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>


          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>



    </div>
</li>
@endguest
</ul>
</div>
</div>
</nav>

<main class="py-4">
    @yield('content')
</main>
</div>
</body>
</html>
