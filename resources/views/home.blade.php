@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        @foreach($movies as $movie)
            <div class="card">
                <h2>{{$movie['title']}}</h2>
                <h2>{{$movie['original_title']}}</h2>
                <h2>{{$movie['nationality']}}</h2>
                <h2>{{$movie['date']}}</h2>
                <h2>{{$movie['vote']}}</h2>
            </div>
            <!-- /.card -->
        @endforeach
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->



@endsection
