<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>
    </title>
    <meta content="conférence PHP" name="description">
    <meta content="Antoine AFUP" name="Patrick LECOINTRE">
    <meta content="Paris, France" name="geo.placename">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

@include('front.includes.header')
<div id="main" role="main">
    <section id="post">
        <h1>Conférences intéressantes autour du PHP</h1>
        <article class="news">
            @section('title')
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