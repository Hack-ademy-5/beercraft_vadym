@extends('plantilla')
@section('content')
<h1>Cervecerias</h1>


@foreach($breweries as $brewery)
<div class="container m-5 p-5 h-100">
    <div class="row">
        <div class="col-12 col-md-6 text-center d-block mx-auto">
            <div class="card" style="width: 25rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$brewery->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted"> {{$brewery->email}}</h6>
                    <p class="card-text">{{$brewery->phone}}</p>
                    <p class="card-text">{{$brewery->message}}</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endforeach


@endsection
