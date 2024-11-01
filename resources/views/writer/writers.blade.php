@extends('layouts.master')

@section('content')

<div class="container d-flex flex-column p-5 align-items-center">
    <h1>Our Writers</h1>
    <div class="container d-flex flex-row p-5 gap-3 justify-content-between">
        @foreach ($writers as $writer)
        <div class="card border-0" style="width: 18rem;">
            <a href="{{ route('writer.detail', $writer->id) }}" class="bg-white shadow p-3 mb-5 bg-body rounded rounded-circle">
                <img src="{{ asset('img/writers/' . $writer->image_link .'.png') }}" class="card-img-top rounded rounded-circle" alt="...">
            </a>
            <div class="card-body d-flex flex-column align-items-center">
                <p class="card-text fw-bold">{{ $writer->name }}</p>
                <p class="card-text">{{ $writer->specialist }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection