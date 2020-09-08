@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Landing Page') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Welcome to the landing page!') }}
                </div>
                <div> {{ $question->links() }}</div>
                <div>
                    <p>&nbsp;</p>
                   
                    
                  <form method="GET" action="{{ action('QuesRetriever@resultView' )}}">
                        @csrf
                        <div id="question">
                    @foreach($question as $quest)
                    <label>{{ $quest->ques }};</label><br />
                    <div id="options">
                        <ul>
                    <li><input type="radio" name="{{ $quest->questionId }}" id="{{ $quest->questionId }}" value="a">{{ $quest->opt1 }}; </input></li><br />
                    <li><input type="radio" name="{{ $quest->questionId }}" id="{{ $quest->questionId }}" value="b">{{ $quest->opt2 }}; </input></li><br />
                    <li><input type="radio" name="{{ $quest->questionId }}" id="{{ $quest->questionId }}" value="c">{{ $quest->opt3 }}; </input></li><br />
                    <li><input type="radio" name="{{ $quest->questionId }}" id="{{ $quest->questionId }}" value="d">{{ $quest->opt4 }}; </input></li><br />
                    <li><input type="radio" name="{{ $quest->questionId }}" id="{{ $quest->questionId }}" value="e">{{ $quest->opt5 }}; </input></li><br />
                    <input type="hidden" name="cor" id="cor" value="{{ $quest->corr }}"></input><br /></ul><p>&nbsp;</p>
                    </div>
                   
                    @endforeach
                    </div>
                    <p>
                    <button type="submit" class="btn btn-warning" id="endTest" name="End Test">End Test</button>
                    </p>
                    </form>
                </div>
                <div> {{ $question->links() }}</div>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/src/cookie.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jsfile.js') }}"></script>

