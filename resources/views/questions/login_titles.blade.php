@extends('layouts.app')
@section('content')
    <ul class="listunstyled">
        @foreach($questions as $question)
            <li class="media">
                <div>
                    <p>{!! link_to_route('question.content', $question->title, ['id'=>$question->id]) !!}</p>
                </div>
            </li>
        @endforeach
@endsection