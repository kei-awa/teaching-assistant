@extends('layouts.app')
@section('content')
    <div class="row">
        {{ $question->title }}
    </div>
    <div class="row">
        {{ $question->content }}
    </div>
@endsection