<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title> <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css"><!-- Include Inter variable font for modern browsers -->
    <style>
        /* Inter font-specific optimizations */
        @supports (font-variation-settings: normal) {
            :root {
                --font-inter: 'Inter var', sans-serif;
            }
        }

        :root {
            --primary-color: #4a67ed;
            --primary-dark: #3951c6;
            --primary-light: #6e8efb;
            --secondary-color: #5e35b1;
            --background-color: #f8f9fa;
            --surface-color: #ffffff;
            --text-color: #333333;
            --text-muted: #666666;
            --text-light: #8a8a8a;
            --border-color: #e6e6e6;
            --border-radius: 8px;
            --box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            --transition-speed: 0.2s;
            --font-inter: 'Inter', sans-serif;

            /* Font size variables */
            --text-xs: 0.75rem;
            /* 12px */
            --text-sm: 0.875rem;
            /* 14px */
            --text-base: 1rem;
            /* 16px */
            --text-lg: 1.125rem;
            /* 18px */
            --text-xl: 1.25rem;
            /* 20px */
            --text-2xl: 1.5rem;
            /* 24px */
            --text-3xl: 1.875rem;
            /* 30px */
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            font-size: 16px;
            -webkit-text-size-adjust: 100%;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
        }

        body {
            font-family: var(--font-inter);
            background-color: var(--background-color);
            color: var(--text-color);
            line-height: 1.5;
            min-height: 100vh;
            font-feature-settings: 'cv02', 'cv03', 'cv04', 'cv11';
            letter-spacing: -0.01em;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: 600;
            line-height: 1.25;
            letter-spacing: -0.025em;
        }

        h1 {
            font-size: var(--text-3xl);
            margin-bottom: 1rem;
        }

        h2 {
            font-size: var(--text-2xl);
            margin-bottom: 0.75rem;
        }

        h3 {
            font-size: var(--text-xl);
            margin-bottom: 0.5rem;
        }

        a {
            color: var(--primary-color);
            text-decoration: none;
            transition: color var(--transition-speed) ease;
        }

        a:hover {
            color: var(--primary-dark);
        }

        #app {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            background-color: var(--surface-color);
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.04);
            padding: 0.75rem 0;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: var(--text-xl);
            color: var(--primary-color) !important;
            letter-spacing: -0.03em;
        }

        .nav-link {
            color: var(--text-color);
            font-weight: 500;
            font-size: var(--text-sm);
            padding: 0.5rem 1rem;
            border-radius: var(--border-radius);
            transition: all var(--transition-speed) ease;
        }

        .nav-link:hover,
        .nav-link:focus {
            background-color: rgba(74, 103, 237, 0.08);
            color: var(--primary-color);
        }

        .nav-link.active {
            color: var(--primary-color);
            font-weight: 600;
        }

        .dropdown-menu {
            border: none;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
            border-radius: var(--border-radius);
            padding: 0.5rem;
            margin-top: 0.5rem;
        }

        .dropdown-item {
            border-radius: calc(var(--border-radius) - 2px);
            padding: 0.5rem 1rem;
            font-size: var(--text-sm);
            transition: all var(--transition-speed) ease;
        }

        .dropdown-item:hover,
        .dropdown-item:focus {
            background-color: rgba(74, 103, 237, 0.08);
            color: var(--primary-color);
        }

        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 1rem;
        }

        #navbarSupportedContent {
            .navbar-nav {
                display: flex;
                list-style: none;
            }
        }

        footer {
            background-color: var(--surface-color);
            box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.04);
            padding: 1rem 0;
            text-align: center;
        }

        @media (max-width: 768px) {
            :root {
                --text-3xl: 1.625rem;
                --text-2xl: 1.375rem;
            }
        }
    </style>
    @yield('styles')
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'uDeck') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('home') }}">
                                    {{ __('Dashboard') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>

        <footer class="footer py-4">
            <div class="container text-center">
                <p class="text-muted">&copy; {{ date('Y') }} {{ config('app.name', 'uDeck') }}. All rights reserved.</p>
            </div>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>