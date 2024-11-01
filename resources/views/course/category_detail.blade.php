@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="pt-5 pb-3 fs-2 fw-bold">{{ $category->name }}</div>
        @include('components.course_card', ['courses' => $category->courses])
    </div>


@endsection