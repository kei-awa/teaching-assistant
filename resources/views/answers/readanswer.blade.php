<div class="row border-top">
        <ul class="listunstyled">
            @foreach ($answers as $answer)
                <li class="media">
                    <div class="row mt-2 border-top">
                        <p>{!! $answer->content !!}</p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>