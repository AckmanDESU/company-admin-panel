<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} {{ app()->version() }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        @yield('head_extra')
    </head>
    <body>
        <div id="app">
            <nav class="navbar has-shadow">
                <div class="container">
                    <div class="navbar-brand">
                        <a href="{{ url('/') }}" class="navbar-item">{{ config('app.name', 'Laravel') }}</a>

                        <div class="navbar-burger burger" data-target="navMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <div class="navbar-menu" id="navMenu">
                        <div class="navbar-start"></div>

                        <div class="navbar-end">
                            @guest
                                <a class="navbar-item " href="{{ route('login') }}">@lang('Login')</a>
                                @if (Route::has('register'))
                                    <a class="navbar-item " href="{{ route('register') }}">@lang('Register')</a>
                                @endif
                            @else
                                <div class="navbar-item has-dropdown is-hoverable">
                                    <a class="navbar-link" href="#">{{ Auth::user()->name }}</a>

                                    <div class="navbar-dropdown">
                                        <a class="navbar-item" href="{{ url('companies') }}">
                                            @lang('Companies')
                                        </a>
                                        <a class="navbar-item" href="{{ url('employees') }}">
                                            @lang('Employees')
                                        </a>

                                        <hr class="dropdown-divider">
                                        <hr class="dropdown-divider">

                                        @foreach(Config::get('app.locales') as $locale)
                                            @if(App::getLocale() != $locale)
                                                <a class="navbar-item" href="{{ url('setlocale/' . $locale) }}">
                                                    {{ strtoupper($locale) }}
                                                </a>
                                            @endif
                                        @endforeach

                                        <hr class="dropdown-divider">

                                        <a class="navbar-item" href="{{ route('logout') }}"
                                                               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            @lang('Logout')
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            @endguest
                        </div>
                    </div>
                </div>
            </nav>
            <div style="margin-top: 15px; margin-bottom: 15px">
                @yield('content')
            </div>
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        @stack('scripts')
    </body>
</html>
