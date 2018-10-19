@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="text-align:center">
        @switch (session('message'))
            @case('1')
                <div id="exito" class="alert alert-success" role="alert">
                    <p>Rating updated successfully</p>
                </div>
                @break
            @case('2')
                <div id="error" class="alert alert-danger" role="alert">
                    <p>You already rated this movie</p>
                </div>
                @break
        @endswitch
            <div class="card">               
                <div class="card-header"><b>THEATERS</b></div>
                <div class="card-body">
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Full Address</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach( $theaters as $theater)  
                        <tr>                                                       
                        <th scope="row"><a href="{{ route('movies', ['theater_id' => $theater->id] )}}">{{ $theater->id }}</a></th>
                        <td>{{ $theater->name }}</td>
                        <td>{{ $theater->full_address }}</td>                                                 
                        </tr>
                    @endforeach
                    </tbody>
                    </table>                    
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
    }, 4000);
</script>
@endsection