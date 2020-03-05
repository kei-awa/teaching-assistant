@extends('layouts.app')
@section('content')
    @if (Auth::check())
        {{ Auth::user()->name }}
        <p>{!! link_to_route('users.show', 'My profile', ['id' => Auth::id()]) !!}</p>
    @else
        <h1>こんにちは</h1>
    @endif
@endsection