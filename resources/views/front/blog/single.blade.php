@extends('main')
@section('body')
    <div id="main" role="main">
        <section id="post">
            <h1>Conférence intéressantes autour du PHP</h1>
            <div class="post">
                    <h2 class="title-conf"><a href="{{url('single',[$post->id,$post->slug])}}"
                                              class="link-post">{{$post->title}}</a></h2>
                    <img class="left" src="assets/upload/{{$post->thumbnail_link}}">

                    <p>{{$post->excerpt}}</p>
                    <br>
                    <a class="link" href="{{url('single',[$post->id,$post->slug])}}">lire la suite...</a>
                    <br><br>
                    <strong>Tags :</strong>
                    @foreach( $post->tags as $tag)
                        <a href="{{url('tag/'.$tag['id'])}}">{{$tag->name}}/</a>
                    @endforeach
                    <h3 class="date">début: {{$post->date_start}} - fin: {{$post->date_end}}</h3>
            </div>
        </section>
    </div>
@endsection