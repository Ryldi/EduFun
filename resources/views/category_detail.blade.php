@extends('layouts.master')

@section('content')

    <div class="container">
        <h1 class="py-5">{{ $category->name }}</h1>
        <div class="row gap-3 pb-5">
            @foreach ($category->courses as $item)
            <div class="card d-flex flex-row border-0 justify-content-between align-items-center p-3">
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
    </div>


@endsection