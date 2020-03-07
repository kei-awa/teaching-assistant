@extends('layouts.app')
@section('content')
    <div class="row border-bottom">
        <h1>{{ $article->title }}</h1>
    </div>
        <div class ="row border-bottom">
            <h2>Abstract</h2>
        </div>
        <div class ="row border-bottom">
            <h3>{{ $article->content }}</h3>
        </div>
    
    
        <div class ="row border-bottom">
            <h2>Introduction</h2>
        </div>
        <div class ="row">
            <h3>{{ $article->introduction }}</h3>
        </div>
    
    
        <div class ="row border-bottom">
            <h2>Reference</h2>
        </div>
        <div class ="row">
            <h3>{{ $article->reference }}</h3>
        </div>
        <div class="row row border-top">
            {{ $article->user->name }}
        </div>
        <div class="mt-2">
            {{ $article->user->profile }}
        </div>
@endsection