@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <button class="btn btn-primary hBack mb-3" type="button" onclick="window.history.back()"><i class="fa fa-backward" aria-hidden="true"></i> Nazad</button>

        <div class="card bg-info text-white mb-3">
            <div class="card-header">{{ $data1->name }}</div>
            <div class="card-body">
                <img src="{{ $data1->image }}">
                <h4 class="card-title">{{ $data1->name }}</h4>
                <p class="card-text">{{ $data1->description }}</p>
            </div>
            <div class="card-footer">
                Cena: {{ $data1->price }} RSD
            </div>
        </div>

    </div>
</div>
@endsection
