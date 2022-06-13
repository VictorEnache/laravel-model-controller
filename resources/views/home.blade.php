@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        @foreach($movies as $movie)
            <div class="card">
                <div class="text"><Strong>Titolo :</Strong>{{$movie['title']}}</div class="text">
                <div class="text"><Strong>Titolo-originale :</Strong>{{$movie['original_title']}}</div class="text">
                <div class="text"><Strong>nazionalita :</Strong>{{$movie['nationality']}}</div class="text">
                <div class="text"><Strong>Anno :</Strong>{{$movie['date']}}</div class="text">
                <div class="text"><Strong>Voto :</Strong>{{$movie['vote']}}</div class="text">
            </div>
            <!-- /.card -->
        @endforeach
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->



@endsection
