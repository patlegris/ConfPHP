<!doctype html>
@include('front.includes.head')
<body>
@include('front.partials.browser')
@include('front.includes.header')
<div id="main" role="main">
    <section id="post">
        <h1>Conférences intéressantes autour du PHP</h1>
        <article class="news">
            @yield('title')
            <h2><a href="#" class="link-post">Symfony Live Madrid 2014</a></h2>
            <img class="left" src="assets/images/confs/symfony_madrid.png">

            <p class="abstract">
                SensioLabs Madrid is proud to announce the third edition of the exceptionally successful SymfonyLive
                Madrid.
                <br>
                <a class="link" href="#">lire la suite...</a>
                <br>
            </p>

            <p><a class="link-outside" href="http://berlin2014.live.symfony.com/">site web de la conférence</a>
            </p>

            <p class="link-keyword">Mots clefs:
                <a href="#">sécurité</a>
            </p>

            <footer>
                <h3 class="date">début:29-10-2014 09:00:00 fin: 31-10-2014 18:00:00 </h3>
            </footer>
        </article>
    </section>
    @include('front.includes.sidebar')
</div>

@include('front.includes.footer')
</body>
</html>