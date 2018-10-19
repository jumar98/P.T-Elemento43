@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="text-align:center">
                <div class="card-header"><b>Rating of {{ $data['name'] }} in theater {{ $data['theater'] }}</b></div>
                <div class="card-body">
                    <b><h1>{{ $data['rating'] }}</h1></b>           
                </div>
            </div>
        </div>
    </div>
</div>
@endsection