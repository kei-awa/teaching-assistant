<div class="row border-top">
    @if (Auth::check())
        @if (Auth::id() == $question->user_id)
        <ul class="listunstyled">
            @foreach ($answers as $answer)
            @if ($answer->where('question_id','=', $question->id)->sum('best_answer') == 0)
                <li class="media">
                    <div class="row">
                        {!! Form::open(['route' => ['question.best_answer', 'id'=>$answer->id], 'method' => 'put']) !!}
                            <div>
                                <p>{{ $answer->content }}</p>
                            </div>
                            {!! Form::submit('ベストアンサー', ['class'=> 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    </div>
                </li>
            @else
                @if ($answer->best_answer == 1)
                    <h4>ベストアンサー</h4>
                        <p>{{ $answer->content}}</p>
                @else
                    <h4>みんなの回答</h4>
                    <li class="media">
                        <p>{{ $answer->content }}</p>
                    </li>
                @endif
            @endif
            @endforeach
        </ul>
        @else
            <ul class="listunstyled">
            @foreach ($answers as $answer)
            <h4>みんなの回答</h4>
                <li class="media">
                    <p>{{ $answer->content }}</p>
                </li>
            </ul>
            @endforeach
        @endif
    @else
        <ul class="listunstyled">
            @foreach ($answers as $answer)
            @if ($answer->best_answer == 1)
                <h4>ベストアンサー</h4>
                    <p>{{ $answer->content}}</p>
            @else
                <h4>みんなの回答</h4>
                <li class="media">
                    <p>{{ $answer->content }}</p>
                </li>
            @endif
            @endforeach
        </ul>
    @endif
</div>




{{--<div class="row border-top">
    <ul class="listunstyled">
        @foreach ($answers as $answer)
        @if (Auth::check())
             @if (Auth::id() != $answer->user_id)
                    @if ($answer->where('question_id','=', $question->id)->sum('best_answer') == 0 || Auth::user() != $question->user)
                        <li class="media">
                        <div class="row">
                                {!! Form::open(['route' => ['question.best_answer', 'id'=>$answer->id], 'method' => 'put']) !!}
                                    <div>
                                        <p>{{ $answer->content }}</p>
                                    </div>
                                    {!! Form::submit('ベストアンサー', ['class'=> 'btn btn-danger btn-sm']) !!}
                                {!! Form::close() !!}
                            </div>
                            </li>
                    @else
                        @if ($answer->best_answer == 1)
                            <h4>ベストアンサー</h4>
                            <p>{{ $answer->content}}</p>
                        @else
                            <h4>みんなの回答</h4>
                            <li class="media">
                                <p>{{ $answer->content }}</p>
                            </li>
                        @endif
                    @endif 
            @else
                @if ($answer->best_answer == 1)
                    <h4>ベストアンサー</h4>
                    <p>{{ $answer->content}}</p>
                @else
                    <h4>みんなの回答</h4>
                    <li class="media">
                        <p>{{ $answer->content }}</p>
                    </li>
                @endif
            @endif
        @else
            @if ($answer->best_answer == 1)
            <h4>ベストアンサー</h4>
                <p>{{ $answer->content}}</p>
            @else
            <h4>みんなの回答</h4>
            <li class="media">
                <p>{{ $answer->content }}</p>
            </li>
            @endif
        @endif
        @endforeach
        </ul>
    </div>--}}