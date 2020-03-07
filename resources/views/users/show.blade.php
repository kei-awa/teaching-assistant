@extends('layouts.app')

@section('content')
    <h1>こん版は</h1>
    <div class="row">
        <div class="col-4">
            <img class="rounded img-fluid" src="{{ Gravatar::src($user->email, 100) }}" alt="">
            <h2>{{ $user->name }}</h2>
        </div>
        <div class="col-8 offset-4">
            <h5 class="mt-2">{{ $user->email }}</h5>
            <p class="mt-2">{{ $user->profile }}</p>
        </div>
    </div>
        <div class="row">
            <ul class="nav nav-tabs navjustified mt-3">
                <li class="nav-item"><a href="#" class="nav-link">過去の投稿</a></li>
                <li class="nav-item"><a href= "{{ route('loginquestion.titles', ['id' => $user->id]) }}" class="nav-link">過去の質問</a></li>
                <li class="nav-item"><a href="#" class="nav-link">解決済み</a></li>
            </ul>
        </div>
        <div class='col-6 offset-6'>
            <ul>
                <li>{{ link_to_route('user.question', '質問する' ,['user' => $user]) }}</li>
                <li><a href="#">記事を投稿する</a></li>
            </ul>
        </div>
@endsection
