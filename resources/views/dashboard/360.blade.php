@extends('dashmain')
@section('body')
    <div id="main" role="main">
        <section id="post">
            <h1>Dashboard</h1>
            <div class="post">
                <table class="u-full-width">
                    <tr>
                        <th>id</th>
                        <th>Status</th>
                        <th>Titre</th>
                        <th>Date de début</th>
                        <th>Date de fin</th>
                        <th>Changt. de statut</th>
                        <th>Supprimer</th>
                    </tr>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->id}}
                            <td/>
                            <td>{{$post->status}}
                            <td/>
                            <td>{{$post->titre}}
                            <td/>
                            <td>{{$post->date_start}}
                            <td/>
                            <td>{{$post->date_end}}
                            <td/>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection
