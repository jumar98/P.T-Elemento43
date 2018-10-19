@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Qualify movie {{ $data['name'] }}</b></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('store.score') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="score" class="col-md-4 col-form-label text-md-right">{{ __('Rating') }}</label>
                            <div class="col-md-6">
                                <input id="score" type="number" min="0" max="5" class="form-control" name="score" required autofocus>
                            </div>
                            <input type="hidden" name="movie_id" value="{{ $data['movie_id'] }}">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>                                             
                    </form>                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection