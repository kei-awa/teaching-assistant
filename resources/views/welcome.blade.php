@extends('layouts.app')
@section('content')
    @if (Auth::check())
       {!! link_to_route('users.show', '未定', ['id'=>Auth::user()->id]) !!}
    @else
        <h1>こんにちは</h1>
    @endif
@endsection