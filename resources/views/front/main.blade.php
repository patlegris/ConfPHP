<!doctype html>
@include('front.includes.head')
<body>
@include('front.partials.browser')
@include('front.includes.header')
<div id="main" role="main">
    <section id="post">
        <h1>Conférences intéressantes autour du PHP</h1>
        {{--<article class="news">--}}
        {{--<h2><a href="#" class="link-post">Symfony Live Madrid 2014</a></h2>--}}
        {{--<img class="left" src="assets/images/confs/symfony_madrid.png">--}}
        {{--<p class="abstract">--}}
        {{--SensioLabs Madrid is proud to announce the third edition of the exceptionally successful SymfonyLive--}}
        {{--Madrid.--}}
        {{--<br>--}}
        {{--<a class="link" href="#">lire la suite...</a>--}}
        {{--<br>--}}
        {{--</p>--}}


        {{--<p><a class="link-outside" href="http://berlin2014.live.symfony.com/">site web de la conférence</a>--}}
        {{--</p>--}}

        {{--<p class="link-keyword">Mots clefs:--}}
        {{--<a href="#">sécurité</a>--}}
        {{--</p>--}}

        {{--<footer>--}}
        {{--<h3 class="date">début:29-10-2014 09:00:00 fin: 31-10-2014 18:00:00 </h3>--}}
        {{--</footer>--}}
        {{--</article>--}}
        <div class="post">
            @if($posts)
                <ul class="list-group">
                    @foreach($posts  as  $post)
                        {{--@if($title = $post->title)--}}
                            <h2><a href="#" class="link-post">{{$post->title}}</a></h2>
                        {{--@endif--}}
                        <img class="left" src="assets/images/confs/{{$post->thumbnail_link}}">
                        <p>{{$post->excerpt}}</p>
                        <br>
                        <a class="link" href="#">lire la suite...</a>
                        <br>
                        @if($thumb = $post->link_thumbnail)
                            <div class="thumbnail"><img src="{{url('upload',[$thumb])}}" alt=""/></div>
                        @endif

                        <li class="list-group-item"><a href="{{url('single',[$post->id,$post->slug])}}"><h3>
                                    <br>{{$post->title}}</h3></a>
                            @if($post->user)
                                <h4>Author :<a href="{{url('user/'.$post->user->id)}}">  {{ $post->user->name}}</a></h4>
                            @else
                                <h4>Author : Pas d'auteur</h4>
                            @endif
                            <strong>Tags :</strong>@foreach( $post->tags as $tag)
                                <a href="{{url('tag/'.$tag['id'])}}"> {{$tag->name}} /</a>
                            @endforeach
                        </li>
                    @endforeach
                </ul>
            @else
                <p>Désolé pas d'article </p>
            @endif
        </div>
    </section>
    @include('front.includes.sidebar')
</div>

@include('front.includes.footer')
</body>
</html>