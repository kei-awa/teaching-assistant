@extends('layouts.app')
@section('content')
    @if (Auth::check())
        {{ link_to_route('users.show', 'show',['id' => Auth::id()]) }}
    @else
        <h1>こんにちは</h1>
    @endif
@endsection