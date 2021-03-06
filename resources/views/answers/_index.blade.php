<div class="row mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h2>{{$answersCount . " " .str_plural('Answer',$answersCount)}}</h2>
                <hr>
                @foreach($answers as $answer)
                    <div class="media">
                        <div class="d-flex flex-column vote-controls">
                            <a title="This answer is useful" class="vote-up">
                                <svg class="fas fa-caret-up fa-3x"></svg>
                            </a>
                            <span class="votes-count">123</span>
                            <a title="This answer is not useful" class="vote-down off">
                                <svg class="fas fa-caret-down fa-3x"></svg>
                            </a>
                            <a title="Mark this answer as best answer" class="vote-accepted">
                                <svg class="fas fa-check fa-2x"></svg>
                            </a>
                        </div>
                        <div class="media-body">
                            {!!$answer->body_html!!}
                            <div class="float-right">
                                <span class="text-muted">Answered {{$answer->created_date}}</span>
                                <div class="media mt-2">
                                    <a href="{{$answer->user->url}}" class="pr-2"><img src="{{$answer->user->avatar}}"></a>
                                    <div class="media-body mt-1">
                                    <a href="{{$answer->user->url}}">{{$answer->user->name}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
</div>