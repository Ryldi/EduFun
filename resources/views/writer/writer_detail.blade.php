@extends('layouts.master')

@section('content')

<div class="container p-5">
    <div class="profile d-flex flex-row align-items-center gap-3 rounded rounded-circle">
        <img src="{{ asset('img/writers/' . $writer->image_link .'.png') }}" alt="" width="100" class="rounded rounded-circle img-thumbnail shadow bg-body">
        <div class="d-flex flex-column gap-2">
            <div class="fs-5">{{ $writer->name }}</div>
            <div class="text-secondary">{{ $writer->specialist }}</div>
        </div>
    </div>

    @if ($writer->courses->count() > 0)
    @include('components.course_card', ['courses' => $writer->courses])
    @else
    <div class="d-flex justify-content-center p-5 mb-5">
        <span class="text-secondary mb-5 pb-5">No course found</span>
    </div>
    @endif
</div>

@endsection