@extends('frontmain')
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
                <strong>Mots clefs :</strong>
                @foreach( $post->tags as $tag)
                    <a href="{{url('tag/'.$tag->id)}}">{{$tag->name}},</a>
                @endforeach
                <br><br>

                <h3 class="date">Début: {{$post->date_start}} - Fin: {{$post->date_end}}</h3>
            </div>
        </section>


        <section id="commentaires">
            <h3 class="comment">Commentaires</h3>

            {{--<h2>Laissez votre commentaire</h2>--}}
            {{--<br>--}}
            {{--{!! Form::open([ 'url' => 'comment' ]) !!}--}}
            {{--{!! Form::hidden('post_id', $post->id) !!}--}}
            {{--{!! Form::label('email', 'Email:') !!}--}}
            {{--{!!Form::text('email', old('email'), ['class'=>'form-control']) !!}<br/><br/>--}}
            {{--{!! $errors->first('email', '<span class="help-block">:message</span>') !!}--}}
            {{--{!! Form::label('message', 'Commentaire:') !!}<br/>--}}
            {{--{!!Form::textarea('message', '', ['cols'=> 30, 'rows' => 10]) !!}<br/><br/>--}}
            {{--{!! $errors->first('message', '<span class="help-block">:message</span>') !!}--}}
            {{--{!!Form::submit('Valider', ['class'=>'btn', 'required']) !!}--}}
            {{--{!! Form::close() !!}<br/>--}}

            @if(count($post->getComment())>0)
                    @foreach($post->getComment() as $comment)
                    <p><b>{{$comment->email}}</b><p/>
                    <p>{{$comment->date}}</p>
                    <p>{{$comment->message}}</p>
                    @endforeach
            @else
                <p>Il n'y a pas de commentaires sur ce sujet, soyez le premier !</p>
            @endif

        </section>
    </div>
@endsection