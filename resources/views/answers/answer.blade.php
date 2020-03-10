@if (Auth::user() != $question->user)
    <div class="col-8">
         {!! Form::open(['route' => ['question.answer', $question->id]]) !!}
            <div class="form-group">
                {!! Form::label('content', '回答する') !!}
                {!! Form::text('content', old('content'), ['class' => 'form-control', 'rows' => '5'])!!}
            </div>
                {!! Form::submit('Answer', ['class' => 'btn btn-danger btn-block']) !!}
        {!! Form::close() !!}
    </div>
@endif