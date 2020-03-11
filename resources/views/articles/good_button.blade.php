@if (Auth::check())
    @if (Auth::user()->be_good($article->id))
        {!! Form::open(['route' => ['user.not_good', $article->id], 'method' => 'delete']) !!}
            {!! Form::submit('not_good', ['class' => "btn btn-danger btn-sm"]) !!}
        {!! Form::close() !!}
    @else 
        {!! Form::open(['route' => ['user.good', $article->id]]) !!}
            {!! Form::submit('Good' , ['class' => "btn btn-info btn-sm"]) !!}
        {!! Form::close() !!}
    @endif
@endif