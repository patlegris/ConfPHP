<!doctype html>
{{--Head and styles--}}
@include('front.includes.head')
<body>
{{--Browser update--}}
@include('front.includes.browser')
{{--Header--}}
@include('front.includes.header')
<div id="main" role="main">
    <section id="post">
        <h1>Conférences intéressantes autour du PHP</h1>
        {{--<footer>--}}
        {{--<h3 class="date">début:29-10-2014 09:00:00 fin: 31-10-2014 18:00:00 </h3>--}}
        {{--</footer>--}}
        {{--</article>--}}
        <div class="post">
            @if($posts)
                <ul class="list-group">
                    @foreach($posts  as  $post)
                        {{--@if($title = $post->title)--}}
                        <h2 class="title-conf"><a href="{{url('single',[$post->id,$post->slug])}}"
                                                  class="link-post">{{$post->title}}</a>
                        </h2>
                        {{--@endif--}}
                        <img class="left" src="assets/images/confs/{{$post->thumbnail_link}}">
                        <p>{{$post->excerpt}}</p>
                        <br>
                        <a class="link" href="{{url('single',[$post->id,$post->slug])}}">lire la suite...</a>
                        <br>
                        <strong>Tags :</strong>
                        @foreach( $post->tags as $tag)
                            <a href="{{url('tag/'.$tag['id'])}}">{{$tag->name}}/</a>
                        @endforeach

                    @endforeach
                </ul>
            @else
                <p>Désolé pas d'article </p>
            @endif
        </div>
    </section>
    {{--Sidebar--}}
    @include('front.includes.sidebar')
</div>
{{--Footer--}}
@include('front.includes.footer')
</body>
</html>