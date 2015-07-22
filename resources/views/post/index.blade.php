@extends('layouts.master')

@section('title')
    <h2><a href="#" class="link-post">{{$title or 'Welcome BLog' }}</a></h2>
@endsection

@section('sidebar')
    @parent

@endsection

@section('content')
    <div class="post">
        @if($posts)
            <ul class="list-group">
                @foreach($posts  as  $post )
                    @if($thumb = $post->link_thumbnail)
                        <div class="thumbnail"><img src="{{url('upload',[$thumb])}}" alt=""/></div>
                    @endif


                    <li class="list-group-item"><a href="{{url('single',[$post->id,$post->slug])}}"><h3>
                                <br>{{$post->title}}</h3></a>
                        @if($post->user)
                            <h4>Author :<a href="{{url('user/'.$post->user->id)}}">  {{ $post->user->name}}</a></h4>
                        @else
                            <h4>Author : Anonymous</h4>
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


@endsection

@section('footer')
    @parent

@endsection