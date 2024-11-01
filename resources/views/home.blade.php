@extends('layouts.master')

@section('content')

    <div class="">
        <img src="{{ asset('img/hero.jpg') }}" alt="hero" style="width: 100%; object-fit: cover;">
    </div>

    <div class="container d-flex flex-column p-5 gap-3">
        @foreach ($courses as $item)
        <div class="card d-flex flex-row border-0 justify-content-between align-items-center">
            <div class="col-5">
                <img src="{{ asset('img/courses/' . $item->image_link .'.png') }}" class="card-img-top rounded rounded-5 img-fluid h-75" alt="img">
            </div>
            <div class="card-body col-7">
                <h4 class="card-title">{{ $item->name }}</h4>
                <span>{{ $item->created_at->format('d M Y') }} | by: {{ strstr($item->writer->name, " ", true)}}</span>
                <div class="fs-5">{{ $item->description }}</div>
                <a href="{{ route('course.show', $item->id) }}" class="btn btn-dark float-end d-flex mt-3">read more...</a>
            </div>
        </div>
        @endforeach

    </div>

@endsection