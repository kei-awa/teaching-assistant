@extends('layouts.app')
@section('content')
    <h1>質問しよう!</h1>
    
    <div class="row justify-content-center">
        <div class="col-8">
            {!! Form::open(['route' => 'questions.store']) !!}
                <div class="form-group">
                    {!! Form::label('title', '質問タイトル', ['class' => 'form-control']) !!}
                    {!! Form::textarea('title', old('title'), ['class' => 'form-control', 'rows' => '3'])  !!}
                </div>
                <div class="form-group">
                    {!! Form::label('content', '質問内容', ['class' => 'form-control']) !!}
                    {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '10']) !!}
                </div>
                {!! Form::submit('質問する', ['class' => 'btn btn-primary btn-block']) !!}
                
            {!! Form::close() !!}
        </div>
    </div>
@endsection