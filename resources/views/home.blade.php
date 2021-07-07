@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($laptops as $item)
        <div class="col-md-3 mb-5" >
            <div class="card text-center">
                <div class="card-header">

                    {{ $item->brand }}
                </div>
                <div class="card-body">
                    <img src="{{ $item->image }}" class="card-img-top img-fluid">
                    <h6 class="card-title">{{ $item->name }}</h6>
                    <a class="btn btn-dark" href="/show/{{ $item->site_id }}">Više</a>
                </div>
                <div class="card-footer text-muted">
                     Cena: {{ $item->price }} RSD
                </div>
            </div>
        </div>
        @endforeach

        {{ $laptops->links() }}
    </div>
</div>
@endsection
