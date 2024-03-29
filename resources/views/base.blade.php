<!DOCTYPE HTML>
<!--
 Future Imperfect by HTML5 UP
 html5up.net | @ajlkn
 Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    @vite(['resources/css/app.css', 'resources/css/fontawesome-all.min.css'])
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header">
            <h1><a href="/">Future Imperfect</a></h1>
            <nav class="links">
                <ul>
                    <li><a href="{{ route('blog.index') }}">Blog</a></li>
                    <li><a href="#">General</a></li>
                    <li><a href="#">Futur</a></li>
                    <li><a href="#">Robot</a></li>
                    <li><a href="#">IA</a></li>
                </ul>
            </nav>
            <nav class="main">
                <ul>
                    <li class="search">
                        <a class="fa-search" href="#search">Search</a>
                        <form id="search" method="get" action="#">
                            <input type="text" name="query" placeholder="Search" />
                        </form>
                    </li>
                    <li class="menu">
                        <a class="fa-bars" href="#menu">Menu</a>
                    </li>
                </ul>
            </nav>
        </header>

        <!-- Menu -->
        <section id="menu">

            <!-- Search -->
            <section>
                <form class="search" method="get" action="#">
                    <input type="text" name="query" placeholder="Search" />
                </form>
            </section>

            <!-- Links -->
            <section>
                <ul class="links">
                    <li>
                        <a href="#">
                            <h3>Lorem ipsum</h3>
                            <p>Feugiat tempus veroeros dolor</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <h3>Dolor sit amet</h3>
                            <p>Sed vitae justo condimentum</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <h3>Feugiat veroeros</h3>
                            <p>Phasellus sed ultricies mi congue</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <h3>Etiam sed consequat</h3>
                            <p>Porta lectus amet ultricies</p>
                        </a>
                    </li>
                </ul>
            </section>

            <!-- Actions -->
            <section>
                <ul class="actions stacked">
                    <li><a href="#" class="button large fit">Log In</a></li>
                </ul>
            </section>

        </section>

        <!-- Main -->
        <div id="main">

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @yield('content')


        </div>

        @yield('sidebar')
        
        @yield('footer')
    </div>

    @vite(['resources/js/jquery.min.js', 'resources/js/browser.min.js', 'resources/js/breakpoints.min.js', 'resources/js/util.js', 'resources/js/main.js'])


</body>

</html>
