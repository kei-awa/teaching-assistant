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
        <div class="rowborder-top">
            {{ $article->user->name }}
        </div>
        <div class="row mt-2">
            {{ $article->user->profile }}
        </div>
        <div class="row">
                @include('articles.good_button', 'user' => Auth::user())
        </div>
@endsection