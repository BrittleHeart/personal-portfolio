<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="Cześć! Jestem Bartosz Pazdur. Na codzień pracuję oraz rozwijam się na
    stanowisku full stack web developera. Moją główną specjalizacja jest JavaScript w połączeniu z środowiskiem
    uruchomieniowym NodeJS. W warstwie wizualnej pracują z wykorzystaniem frameworka Vue w wersji 3 bądź drugiej,
    w zależnośći od specyfikacji projektu. Chcesz wiedzieć więcej? Zapraszam na https://github.com/BrittleHeart">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="portfolio, bartosz, pazdur, overmind, brittle heart, bartosz pazdur, github
    Vue, Laravel, SEO, full stack, full, stack, zzmwruda, zzmwruda.pl, overblitz, web, developer, bartoszpazdur.pl,
    staysecure, facebook, #staysecure">

    <meta name="language" content="pl-pl">

    <meta name="og:title" content="Bartosz Pazdur Portfolio">
    <meta name="og:description" content="Cześć! Jestem Bartosz Pazdur. Na codzień pracuję oraz rozwijam się na
    stanowisku full stack web developera. Moją główną specjalizacja jest JavaScript w połączeniu z środowiskiem
    uruchomieniowym NodeJS.">
    <meta name="og:image" content="{{ asset('img/background.jpg') }}">

    <title>Bartosz Pazdur | @yield('title')</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&family=Roboto+Condensed&display=swap" rel="stylesheet">

    <!-- custom styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="antialiased">

    <div id="app" class="app" role="application" v-cloak aria-label="application main wrapper">
        <header aria-label="banner" role="banner" class="" id="primary-heading">

            <!-- nav section -->
            <nav class="navigation-wrapper items-center bg-blog-accent text-white relative" id="primary-navigation" aria-label="navigation" role="navigation">
                <!-- application brand -->
                <div class="">
                    <a href="{{ route('home.index') }}" class="font-medium text-2xl md:text-3xl" role="link">
                        Bartosz Pazdur
                    </a>
                </div>

                <!-- nav toggle -->
                <div class="text-dark md:hidden" id="show-nav-button">
                    <span class="iconify text-3xl" data-icon="clarity:bars-line"></span>
                </div>

                <!-- nav list -->
                <div class="nav-shown text-white hidden md:block text-center" id="nav-list">
                    <!-- closing button -->
                    <div class="closing-button" role="button" id="close-nav">
                        <span class="iconify border-2 border-white" data-icon="clarity:times-line"></span>
                    </div>

                    <!-- nav items -->
                    <ul class="nav-items" id="nav-list" role="list">
                        <li class="nav-item" role="listitem">
                            <a href="{{ route('blog.index') }}" class="nav-link" role="link" aria-labelledby="navigation link">
                                wpisy
                            </a>
                        </li>
                        <li class="nav-item" role="listitem">
                            <a href="#about-me" class="nav-link" role="link" aria-labelledby="navigation link">
                                kategorie
                            </a>
                        </li>
                        <li class="nav-item" role="listitem">
                            <a href="#projects" class="nav-link" role="link" aria-labelledby="navigation link">
                                kontakt
                            </a>
                        </li>
                        <li class="nav-item" role="listitem">
                            <a href="#projects" class="nav-link" role="link" aria-labelledby="navigation link">
                                portfolio
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="user-login hidden md:block">
                    <ul>
                        @auth()
                            <li class="nav-item" role="listitem">
                                <div class="dropdown-menu" role="menu" aria-label="dropdown menu">
                                    <div class="dropdown-menu-wrapper cursor-pointer" role="banner" @click="toggleDialog()">
                                        <figure class="dropdown-avatar flex items-center md:justify-end" role="figure" aria-label="user avatar">
                                            <img src="https://unsplash.it/200/200" alt="user-avatar" class="rounded-full w-2/12 h-2/12 mx-2">
                                            <span class="dropdown-avatar-name text-lg mr-4">Hej, {{ auth()->user()->nick  }}</span>
                                            <div class="dropdown-button text-lg">
                                                <span class="iconify" data-icon="ant-design:caret-down-filled"></span>
                                            </div>
                                        </figure>
                                    </div>
                                    <div class="dropdown-menu-dialog" role="dialog" v-if="dialog">
                                        <ul class="dropdown-menu-dialog-list">
                                            <li class="dropdown-menu-dialog-list-item">
                                                <a href="">
                                                    Profil
                                                </a>
                                            </li>
                                            <li class="dropdown-menu-dialog-list-item">
                                                <a href="">
                                                    Wpisy
                                                </a>
                                            </li>
                                            <li class="dropdown-menu-dialog-list-item">
                                                <a href="">
                                                    Ustawienia
                                                </a>
                                            </li>
                                            @if((new \App\Http\Controllers\AuthController())->isAdmin())
                                                <li class="dropdown-menu-dialog-list-item font-regular">
                                                    <a href="{{ route('admin.home') }}">
                                                        panel administracyjny
                                                    </a>
                                                </li>
                                            @endif
                                            <li class="py-4 px-4 font-regular w-full hover:bg-dirty-white rounded-md transition duration-300 ease-linear">
                                                <a href="{{ route('auth.logout') }}">
                                                    wyloguj
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        @endauth
                        @guest()
                            <li class="nav-item items-center align-middle md:flex" role="listitem">
                                <div class="login-icon align-middle text-center flex justify-center">
                                    <a href="{{ route('auth.login') }}" class="my-auto text-3xl cursor-pointer mr-2">
                                        <span class="iconify " data-icon="akar-icons:person"></span>
                                    </a>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </header>

        <main class="main-content pb-3" role="main">
            <div class="font-primary flex flex-col md:flex-row items-start justify-evenly md:justify-between pt-10 md:pt-14 px-3 md:px-0">
                @yield('content')

                <section class="sidebars w-1/2 md:pl-32 mx-auto">
                    <!-- search action -->
                    <div class="sidebar pb-11">
                        <h3 class="font-normal text-lg text-dark-200 leading-8 pb-3 md:text-xl tracking-wide">Wyszukiwarka</h3>
                        <form action="{{ route('blog.search') }}" method="post">
                            @csrf

                            <div class="input-group relative">
                                <span class="iconify absolute top-1/2 left-2 -translate-y-1/2 text-xl" data-icon="akar-icons:search"></span>
                                <input type="text" name="search" id="search" class="block rounded-sm pl-9 py-3 border border-dirty-white text-lg outline-blog-accent font-light" placeholder="czego szukasz?">
                            </div>
                            @if(isset($notfound))
                                <p class="text-xs text-red tracking-wide">{{ $notfound }}</p>
                            @endif
                            <button class="font-medium uppercase text-sm text-white bg-blog-accent rounded-sm py-3 px-2 mt-2">
                                wyszukaj
                            </button>
                        </form>
                    </div>

                    <!-- all categories -->
                    <div class="sidebar pb-14">
                        <h3 class="font-normal text-lg text-dark-200 leading-8 pb-3 md:text-xl tracking-wide">Wszystkie kategorie</h3>
                        <ul>
                            @foreach($categories as $category)
                                <li class="font-light italic text-base text-dark-150 leading-7">
                                    <a href="{{ route('blog.categories', ['category' => $category->name]) }}">
                                        {{ $category->name }} ({{ $category->posts()->count() }})
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="sidebar pb-14">
                        <h3 class="font-normal text-lg text-dark-200 leading-8 pb-3 md:text-xl tracking-wide">Wszystkie tagi</h3>
                        <ul>
                            @foreach($tags as $tag)
                                <li class="font-light italic text-base text-dark-150 leading-7">
                                    <a href="{{ route('blog.tags', ['tag' => $tag->name]) }}">
                                        #{{ $tag->name }} ({{ $tag->posts->count() }})
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="sidebar pb-14">
                        <h3 class="font-normal text-lg text-dark-200 leading-8 pb-3 md:text-xl tracking-wide">Topowi autorzy</h3>
                        <ul>
                            <li class="font-light italic text-base text-dark-150 leading-7">
                                <a href="">
                                    overmind
                                </a>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </main>
    </div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
