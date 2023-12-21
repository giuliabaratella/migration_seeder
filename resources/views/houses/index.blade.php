@extends('layouts.app')
@section('title', 'Houses')
@section('content')
    <main>
        <h1>
            Houses
        </h1>
        <div class="row">
            @forelse ($houses as $house)
                <div class="col-12 col-md-3 col-lg-4">
                    <div class="card">
                        <img src="{{ $house->image }}" alt="{{ $house->name }}">
                        <div class="card-body">
                            <h5>{{ $house->name }}</h5>
                            <div>{{ $house->city }} - {{ $house->address }} -{{ $house->postal_code }}</div>
                        </div>
                    </div>
                </div>
            @empty
                <div>no record found</div>
            @endforelse
        </div>
    </main>
@endsection
