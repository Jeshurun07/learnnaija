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
                <div>
                    <p>&nbsp;</p>
                    
                  <form method="GET" action="{{ action('QuesRetriever@resultView' )}}">
                        @csrf
                        
                    @foreach($question as $quest)
                    <label>{{ $quest->ques }};</label><br />
                    <input type="radio" name="{{ $quest->ques }}" id="{{ $quest->ques }}" value="a" {{ (old($quest->ques)=='a') ? 'checked' : ''}}>{{ $quest->opt1 }}; </input><br />
                    <input type="radio" name="{{$quest->ques}}" id="{{ $quest->ques}}" value="b" {{ (old($quest->ques)=='b') ? 'checked' : ''}}>{{ $quest->opt2 }}; </input><br />
                    <input type="radio" name="{{$quest->ques}}" id="{{ $quest->ques}}" value="c" {{ (old($quest->ques)=='c') ? 'checked' : ''}}>{{ $quest->opt3 }}; </input><br />
                    <input type="radio" name="{{$quest->ques}}" id="{{ $quest->ques}}" value="d" {{ (old($quest->ques)=='d') ? 'checked' : ''}}>{{ $quest->opt4 }}; </input><br />
                    <input type="radio" name="{{$quest->ques}}" id="{{ $quest->ques}}" value="e" {{ (old($quest->ques)=='e') ? 'checked' : ''}}>{{ $quest->opt5 }}; </input><br /><p>&nbsp;</p>
                    
                    @endforeach
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
<script type="text/javascript" src="{{ URL::asset('js/jsfile.js') }}"></script>
@endsection
