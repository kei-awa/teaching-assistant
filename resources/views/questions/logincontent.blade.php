@extends('layouts.app')
@section('content')
    <div class="row">
        {{ $question->title }}
    </div>
    <div class="row">
        {{ $question->content }}
    </div>
    @include('answers.readanswer', ['answer'=>$answer])
    @include('answers.answer', ['question' => $question])
@endsection