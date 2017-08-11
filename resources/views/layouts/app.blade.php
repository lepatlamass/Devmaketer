<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DevMarketer</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar has-shadow">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="{{route('home')}}">
                        <img src="{{asset('images/brand.png')}}" alt="devmaketer Logo" />
                    </a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-10">Learn</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">Discusse</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">Share</a>
                </div>

                <div class="navbar-end navbar-menu">
                    @if (Auth::guest())
                        <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
                        <a href="{{route('register')}}" class="navbar-item is-tab">Join the Community</a>
                    @else
                        <button class="navbar-item has-dropdown  is-hoverable">
                            <a href="" class="navbar-link is-active is-tab">Alex Pat</a>
                            <div class="navbar-dropdown">
                                <a href="" class="navbar-item">
                                <span class="icon"><i class="fa fa-fw fa-user-circle-o m-r-20"></i></span>
                                Profile</a>
                                <a href="" class="navbar-item">
                                 <span class="icon"><i class="fa fa-fw fa-bell m-r-20"></i></span>
                                Notifications</a>
                                <a href="" class="navbar-item">
                                 <span class="icon"><i class="fa fa-fw fa-cog m-r-20"></i></span>
                                Settings</a>
                                <hr class="navbar-divider">
                                <a href="" class="navbar-item">
                                 <span class="icon"><i class="fa fa-fw fa-sign-out m-r-20"></i></span>
                                Logout</a>
                            </div>
                        </button>
                    @endif
                </div>
            </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
