@extends('layouts.app')
@section('content')
{{-- @if (Auth::check())
    <ul class="listunstyled">
        @foreach($questions as $question)
            <li class="media">
                <div>
                    <p>{!! link_to_route('question.content', $question->title, ['id'=>$question->id]) !!}</p>
                </div>
            </li>
        @endforea
@else --}}
    <h1>質問掲示板</h1>
        <ul class="listunstyled">
            @foreach($questions as $question)
                <li class="media">
                    <div>
                        <p>{!! link_to_route('question.content', $question->title, ['id'=>$question->id]) !!}</p>
                    </div>
                </li>
            @endforeach
        </ul>
{{-- @endif --}}
@endsection