@extends('layouts.app')
@section('content')
    
    <h1>自分の投稿</h1>
    <ul class="listunstyled">
        @foreach($articles as $article)
            <li class="media">
                <div>
                    <p>{!! link_to_route('articles.show', $article->title, ['id'=>$article->id]) !!}</p>
                </div>
            </li>
        @endforeach
    </ul>
@endsection