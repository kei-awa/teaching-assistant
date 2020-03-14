@php
$total = 0;
$total = DB::table('answers')->sum('best_answer')
if ($total >= 1){
    $best_answer = Answer::where('best_answer','=',1)->get();
    {{ $best_answer->content }}
    <li class="media">
                <div class="row mt-2 border-top">
                        <p>{!! $answer->content !!}</p>
                    </div>
                </li>
} else {
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
                    }
@endphp