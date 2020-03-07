@extends('layouts.app')
@section('content')
<h1>質問掲示板</h1>
    <ul class="listunstyled">
        @foreach($questions as $question)
            <li class="media">
                <div>
                    <p>{!! link_to_route('question.content', $question->id, ['id'=>$question->id]) !!}{{ $question->title }}</p>
                </div>
            </li>
        @endforeach
    </ul>
@endsection