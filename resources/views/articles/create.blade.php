@extends('layouts.app')
@section('content')
    <h1>記事を書こう!</h1>
    
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            {!! Form::open(['route' =>'articles.store']) !!}
                <div class="form-group">
                    {!! Form::label('title', 'Title') !!}
                    {!! Form::textarea('title', old('title'), ['class'=> 'form-control', 'rows' => '2']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('content', 'Abstract') !!}
                    {!! Form::textarea('content', old('content'), ['class'=> 'form-control', 'rows' => '10']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('introduction', 'introduction') !!}
                    {!! Form::textarea('introduction', old('introduction'), ['class'=> 'form-control', 'rows' => '50']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('reference', 'ireference') !!}
                    {!! Form::textarea('reference', old('reference'), ['class'=> 'form-control', 'rows' => '10']) !!}
                </div>
                
                
                {!! Form::submit('投稿', ['class'=> 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection