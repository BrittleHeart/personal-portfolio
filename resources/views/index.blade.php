@extends('layouts.main')

@section('title', 'Strona Główna')

@section('content')
    <!-- section about me -->
    <section class="main-content main-section mt-10 px-3" aria-label="section about me" id="about-me">
        <!-- about me heading -->
        <SectionHeader title="poznaj mnie" header="o mnie"></SectionHeader>

        <!-- about me content -->
        <section aria-label="main content" id="about-me-content" role="contentinfo" class="pt-12 flex justify-evenly flex-col items-start">
            <article class="flex-shrink-0">
                <h2 class="font-medium text-lg md:text-3xl">
                    Jestem
                    <span class="text-accent font-semibold">Bartosz Pazdur</span>,
                    Web Developer.
                </h2>
                <p class="font-normal leading-7 md:leading-8 tracking-wide text-sm md:text-base text-justify pt-6">
                    Na co dzień tworzę, oraz rozwijam nowe projekty z wykorzystaniem nowoczesnych technologii.
                    Jestem również pracownikiem w przedsiębiorstwie Encode IT Rafał Jaseniuk na stanowisku Full Stack
                    Web Developera.
                </p>
                <p class="font-normal leading-7 md:leading-8 tracking-wide text-sm md:text-base text-justify pt-6">
                    Poza pracą jako programista, interesuję się elektroniką w odniesieniu do budowy robotów
                    z wykorzystaniem Arduino UNO, zabawą z RasberryPi i tym podobnych.
                </p>
            </article>

            <!-- about me info -->
            <article class="mt-10 w-2/3 mx-auto text-center">
                <div class="info">
                    <!-- single info -->
                    <div class="single-info">
                        <p class="font-medium text-sm md:text-base">
                            Imię i nazwiska
                            <span class="font-normal">Bartosz Pazdur</span>
                        </p>
                    </div>
                    <!-- single info -->
                    <div class="single-info">
                        <p class="font-medium text-sm md:text-base">
                            Email
                            <a href="mailto: b.pazdur@yahoo.com" class="text-accent font-semibold">
                                b.pazdur@yahoo.com
                            </a>
                        </p>
                    </div>
                    <!-- single info -->
                    <div class="single-info">
                        <p class="font-medium text-sm md:text-base">
                            Wiek
                            <span class="font-normal">{{ date('Y') - 1998 }}</span>
                        </p>
                    </div>
                    <!-- single info -->
                    <div class="single-info">
                        <p class="font-medium text-sm md:text-base">
                            Kraj
                            <span class="font-normal">Polska</span>
                        </p>
                    </div>
                    <!-- info action -->
                    <div class="info-action border-none pt-8">
                        <button class="single-info-button">
                            <span class="iconify mr-2 text-center" data-icon="el:download-alt"></span>
                            Ściągnij CV
                        </button>
                    </div>
                </div>
            </article>

            <article class="showing-off mt-12 w-full flex justify-evenly md:justify-between items-center flex-col md:flex-row text-center">
                <div class="single-off border-b py-2 md:py-0 md:pr-6 border-dark-50 md:w-full md:border-b-0 md:border-r">
                    <h3 class="font-medium text-5xl md:text-5xl">6</h3>
                    <p class="tracking-wide pt-2 font-medium text-sm ">Lat doświadczenia</p>
                </div>
                <div class="single-off border-b py-2 md:py-0 border-dark-50 md:w-full md:border-b-0 md:border-r">
                    <h3 class="font-medium text-5xl md:text-5xl">30</h3>
                    <p class="tracking-wide pt-2 font-medium text-sm ">Zadowolonych klientów</p>
                </div>
                <div class="single-off py-2 md:w-full">
                    <h3 class="font-medium text-5xl md:text-5xl pl-6">100+</h3>
                    <p class="tracking-wide pt-2 font-medium text-sm ">Stworzonych projektów</p>
                </div>
            </article>
        </section>
    </section>

    <!-- section projects -->
    <section aria-label="Moje projekty" id="project-section" class="main-section bg-background-accent mt-12 md:mt-15 py-5">
        <SectionHeader title="czym się zajmuję" header="projekty"></SectionHeader>

        <!-- projects -->
        <article class="projects main-content px-3 py-10 flex justify-evenly flex-col md:justify-between md:flex-row">
            <!-- single project -->
            <div class="project bg-white p-4 rounded-md shadow-md mb-3 md:mb-0">
                <span class="px-2 py-1 text-sm text-white rounded-full bg-accent">javascipt</span>
                <div class="project-info flex justify-between items-center border-b border-dirty-white pt-4">
                    <div class="project-title font-primary">
                        <h3 class="heading text-lg text-dark-300 font-medium">Projekt CRM</h3>
                    </div>
                    <div class="project-socials flex justify-around items-center">
                        <div class="social text-lg">
                            <span class="iconify" data-icon="akar-icons:github-fill"></span>
                        </div>
                        <div class="social  text-lg ml-2">
                            <span class="iconify" data-icon="whh:website"></span>
                        </div>
                    </div>
                </div>
                <div class="project-description py-4">
                    <p class="font-normal text-justify text-dark-100">
                        Projekt koncentrujący się na stworzeniu systemu CRM do
                        użytku własnego w celu prowadzenia kursów z zakresu programowania.
                    </p>
                </div>
                <div class="flex justify-between items-center">
                    <div></div>
                    <a class="text-right font-normal text-accent cursor-pointer" href="#">Zobacz więcej</a>
                </div>
            </div>
        </article>
    </section>

    <!-- section blog -->
    <section class="main-section mt-14 md:mt-20">
        <Sectionheader title="wpisy z bloga" header="mój blog"></Sectionheader>
        <!-- posts -->
        <article class="posts">
            <!-- single post -->
            <div class="post">
                <span class="uppercase font-primary font-semibold">
                    Bezpieczeństwo
                </span>
            </div>
            <!-- single post -->
            <div class="post">
                <span class="uppercase font-primary font-semibold">
                    Programowanie
                </span>
            </div>
            <!-- single post -->
            <div class="post">
                <span class="uppercase font-primary font-semibold">
                    ITTalks
                </span>
            </div>
            <!-- single post -->
            <div class="post">
                <span class="uppercase font-primary font-semibold">
                    kursy
                </span>
            </div>
        </article>
    </section>
@endsection
