@extends('main')
@section('body')
    <div id="main" role="main">
        <section id="post">
            <h1>Conférences intéressantes autour du PHP</h1>

            <div class="post">
                <h2 class="title-conf"><a href="{{url('conference',[$post->id,$post->slug])}}"
                                          class="link-post">{{$post->title}}</a></h2>
                <img class="left" src="{{asset('assets/upload/'.$post->thumbnail_link)}}">

                <p>{{$post->content}}</p>
                <br><br><br>
                <strong>Tags :</strong>
                @foreach( $post->tags as $tag)
                    <a href="{{url('tag/'.$tag->id)}}">{{$tag->name}}/</a>
                @endforeach
                <br><br>

                <h3 class="date">Début: {{$post->date_start}} - Fin: {{$post->date_end}}</h3>
            </div>
        </section>


        <section id="commentaires">
            <h3 class="comment">Commentaires</h3>
            @if(count($post->getComment())>0)
                <ul>
                    @foreach($post->getComment() as $comment)
                        <li>{{$comment->email}}</li>
                        {{$comment->message}}<br/>
                    @endforeach
                </ul>
            @else
                <p>Il n'y a pas de commentaires sur ce sujet, soyez le premier !</p>
            @endif
        </section>
            {{--<section id="">--}}
        </section>
    </div>
@endsection