@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="text-align:center">
            <div class="card">
                <div class="card-header"><b>Ratings List</b></div>
                <div class="card-body">
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Movie name</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach( $scores as $score)  
                        <tr>                                                       
                        <td>{{ $score->movie->name }}</th>
                        <td>{{ $score->rating }}</td>
                        <td>{{ $score->created_at }}</td>                                                 
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