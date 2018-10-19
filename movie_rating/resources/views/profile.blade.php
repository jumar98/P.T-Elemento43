@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6" style="text-align:center">        
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th colspan="4" scope="col">Profile information</th>
                    </tr>
                </thead>               
                <tbody>
                    <tr>
                    <th scope="row">Name</th>
                    <th>{{ Auth::user()->name }}</th>
                    </tr>
                    <tr>
                    <th scope="row">Last Name</th>
                    <th>{{ Auth::user()->last_name}}</th>
                    </tr>
                    <tr>
                    <th scope="row">Age</th>
                    <th>{{ Auth::user()->age }}</th>
                    </tr>
                    <tr>
                    <th scope="row">Email</th>
                    <th>{{ Auth::user()->email}}</th>
                    </tr>
                    <tr>
                    <th scope="row">Date created</th>
                    <th>{{ Auth::user()->created_at}}</th>
                    </tr>
                </tbody>
                </table>             
        </div>
        <div class="col-md-6"  style="text-align:center">
            <div class="card">
                <div class="card-header"><b>Ratings list</b></div>
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
                    @foreach( $ratings as $rating)  
                        <tr>                                                       
                        <td>{{ ($rating->movie->name) }}</th>
                        <td>{{ $rating->rating }}</td>
                        <td>{{ $rating->created_at }}</td>                                                 
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
