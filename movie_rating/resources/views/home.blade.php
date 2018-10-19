@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 offset-md-1"> 
          <a href="{{ route('profile') }}">
            <img src="{{ asset('image/profile.png') }}" title="Profile">
          </a>    
        </div>
        <div class="col-md-4">
            <a href="{{ route('welcome') }}">
                <img src="{{ asset('image/theater.png') }}" width="220" heigth="220" title="Theaters and movies">
            </a> 
        </div>
    </div>
</div>
@endsection
