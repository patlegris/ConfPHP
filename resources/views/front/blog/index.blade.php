@section('blog.index')
    <div id="main" role="main">
        <section id="post">
            <h1>Conférences intéressantes autour du PHP</h1>

            <div class="post">
                @if($posts)
                    <ul class="list-group">
                        @foreach($posts  as  $post)
                            <h2 class="title-conf"><a href="{{url('single',[$post->id,$post->slug])}}"
                                                      class="link-post">{{$post->title}}</a></h2>
                            <img class="left" src="assets/images/confs/{{$post->thumbnail_link}}">
                            <p>{{$post->excerpt}}</p>
                            <br>
                            <a class="link" href="{{url('single',[$post->id,$post->slug])}}">lire la suite...</a>
                            <br><br>
                            <strong>Tags :</strong>
                            @foreach( $post->tags as $tag)
                                <a href="{{url('tag/'.$tag['id'])}}">{{$tag->name}}/</a>
                            @endforeach
                            <br><br><h3 class="date">début: {{$post->date_start}} - fin: {{$post->date_end}}</h3>
                        @endforeach
                    </ul>
                @else
                    <p>Désolé pas de conférences prévues pour le moment, repassez nous voir prochainement</p>
                @endif
            </div>
        </section>
    </div>
@endsection