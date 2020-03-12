@extends('layouts.app')
@section('content')
    <div class="row">
        <h1>{{ $question->title }}</h1>
    </div>
    <div class="row">
        <h3>{{ $question->content }}</h3>
    </div>
    @include('answers.readanswer', ['answers'=>$answers])
    @if (Auth::check())
        @include('answers.answer', ['question' => $question])
    @endif
@endsection