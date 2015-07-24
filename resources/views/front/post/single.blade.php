@extend('front.main')
<div id="main" role="main">
    <section id="post">
        <h1>Conférences intéressantes autour du PHP</h1>

        <div class="post">
            <h2 class="title-conf">{{$posts->title}}</h2>
            <img class="left" src="assets/images/confs/{{$posts->thumbnail_link}}">

            <p>{{$posts->excerpt}}</p>
            <br>
            <a class="link" href="{{url('front/single',[$posts->id,$posts->slug])}}">lire la suite...</a>
            <br><br>
            <strong>Tags :</strong>
            @foreach( $posts->tags as $tag)
                <a href="{{url('front/tag/'.$tag['id'])}}">{{$tag->name}}/</a>
            @endforeach
            <br><br>

            <h3 class="date">début: {{$posts->date_start}} - fin: {{$posts->date_end}}</h3>
        </div>
    </section>
</div>
</body>
</html>