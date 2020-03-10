@extends('layouts.app')
@section('content')
    <div class="row">
        <h1>{{ $question->title }}</h1>
    </div>
    <div class="row">
        <h3>{{ $question->content }}</h3>
    </div>
    {{--<div class="row border-top">
        <ul class="listunstyled">
            @foreach ($answers as $answer)
                <li class="media">
                    <div class="row mt-2 border-top">
                        <p>{{ $answer->content }}</p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>--}}
    @include('answers.answer', ['question' => $question])
@endsection