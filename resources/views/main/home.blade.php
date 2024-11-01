@extends('layouts.master')

@section('content')

    <div class="">
        <img src="{{ asset('img/hero.jpg') }}" alt="hero" style="width: 100%; object-fit: cover;">
    </div>

    @include('components.course_card', ['courses' => $courses])

@endsection