@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="text-align:center">
            <div class="card">
                <div class="card-header"><b>Movies of {{ $data['name'] }}</b></div>
                <div class="card-body">
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Type</th>
                        @auth
                        <th scope="col">Rating</th>
                        @endauth
                        </tr>
                    </thead>
                    <tbody>
                    @foreach( $data['movies'] as $movie )                         
                        <tr>                                        
                        <th scope="row"><a href="{{ route('rating', ['movie_id' => $movie->id]) }}">{{ $movie->id }}</a></th> 
                        <td>{{ $movie->name }}</td>
                        <td>{{ $movie->type }}</td>  
                        @auth
                        <td><a href="{{ route('qualify', ['movie_id' => $movie->id]) }}">Qualify</a></td>
                        @endauth                   
                        </tr>
                    @endforeach
                    </tbody>
                    </table>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection