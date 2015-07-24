<!doctype html>
@include('front.includes.head')
<body>
@include('front.includes.browser')
@include('front.includes.header')
@section('title')
    Mots clés
@endsection

@section('content')
    <section class="tag">
        <h3>{{$tag->name}}</h3><br>
        @foreach($tag->posts as $post)
            <section class="post">
                <h2>{{$post->title}}</h2>

                <p>{{$post->content}}</p>
            </section>
        @endforeach
    </section>
    @endsection
    </div>
    </section>
    @include('front.includes.sidebar')
    </div>

    @include('front.includes.footer')
</body>
</html>