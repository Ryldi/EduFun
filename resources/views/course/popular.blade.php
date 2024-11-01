@extends('layouts.master')

@section('content')
<div class="container pt-5 pb-3 fs-2 fw-bold">Popular</div>
@include('components.course_card', ['courses' => $courses])
@endsection