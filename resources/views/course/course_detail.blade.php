@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="py-5">
            <a class="fs-2 fw-bold text-dark text-decoration-none" href="{{ route('category.show', $course->category->id) }}">{{ $course->category->name }} / </a> 
            
            <a class="fs-3 text-dark text-decoration-none" href="{{ route('course.show', $course->id) }}">{{ $course->name }}</a>
        </div>
        <div class="d-flex justify-content-center">
            <img class="rounded rounded-4 img-thumbnail w-75" src="{{ asset('img/courses/' . $course->image_link .'.png') }}" alt="img">
        </div>
        <div class="p-5 d-flex flex-column gap-3">
            <span>{{ $course->created_at->format('d M Y') }} | by: {{ strstr($course->writer->name, " ", true)}}</span>
            <p class="fs-5">{!! nl2br($course->description) !!}</p>
        </div>
    </div>
@endsection