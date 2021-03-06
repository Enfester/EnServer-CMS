<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@if (!Auth::guest()) {{$title}} | @endif {{ config('app.name', 'Laravel') }} игровые сервера Minecraft с модами.</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
         <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">

                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>

                        <ul class="nav navbar-nav">

                            <li><a href="{{ url('/') }}">@lang('cms.menu.home')</a></li>
                            <li><a href="{{ route('download') }}">@lang('cms.menu.download')</a></li>
                            <li><a href="{{ route('rating') }}">@lang('cms.menu.rating')</a></li>
                            <li><a href="{{ url('/forum') }}">@lang('cms.menu.forum')</a></li>
                            <li><a href="{{ url('rules') }}">@lang('cms.menu.rules')</a></li>
                            <li><a href="{{ route('donate') }}">@lang('cms.menu.donate')</a></li>
                            <li><a href="{{ route('bonus') }}">@lang('cms.menu.bonus')</a></li>
                        </ul>

                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                            &nbsp;
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @if (Auth::guest())
                            <li><a href="{{ route('login') }}">@lang('cms.menu.login')</a></li>
                            <li><a href="{{ route('register') }}">@lang('cms.menu.register')</a></li>
                            @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->login }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ route('profile') }}">@lang('cms.cabinet.home')</a></li>
                                    <li><a href="{{ route('bonus') }}">@lang('cms.cabinet.bonus')</a></li>
                                    <li><a href="/profile/?donate">@lang('cms.cabinet.donate')</a></li>
                                    <li><a href="/profile/?frends">@lang('cms.cabinet.frends')</a></li>

                                    <li><div class="divider"></div></li>
                                    <li><a href="{{route('support')}}">@lang('cms.cabinet.support')</a></li>
                                    <li><a href="/profile/?settings">@lang('cms.cabinet.settings')</a></li>
                                    <li><a href="{{route('skin')}}">@lang('cms.cabinet.skin')</a></li>
                                    <li><div class="divider"></div></li>         
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                            @lang('cms.cabinet.logout')
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>

            @yield('content')
        </div>

        <footer class="footer" style="background-color: #212121;">
            <div class="container " style="padding: 64px 24px;">
                <div class="row">
                    <div class="col-md-6">
                        <p class="text-muted">© 2017 "ЭнСервер.ру"</p>
                    </div>
                    <div class="col-md-6">

                        Языки:
                        <p><a href="{{route('lang',['locale'=>'ru'])}}">Русский</a></p>
                        <p><a href="{{route('lang',['locale'=>'en'])}}">English</a></p>
                        <p><a href="{{route('lang',['locale'=>'uk'])}}">Український</a></p>

                    </div>
                </div>
            </div>
        </footer>



        <!-- Scripts -->
       
    </body>
</html>
