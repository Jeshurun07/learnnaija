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
                    <form method="GET" action="{{ action('QuesRetriever@questView' )}}">
                        @csrf
                        
                    @foreach($question as $quest)
                    <label>{{ $quest->ques }};</input><br />
                    <input type="radio" name="{{ $quest->ques }}" id="{{ $quest->ques }}">{{ $quest->opt1 }}; </input><br />
                    <input type="radio" name="{{$quest->ques}}" id="{{ $quest->ques}}">{{ $quest->opt2 }}; </input><br />
                    <input type="radio" name="{{$quest->ques}}" id="{{ $quest->ques}}">{{ $quest->opt3 }}; </input><br />
                    <input type="radio" name="{{$quest->ques}}" id="{{ $quest->ques}}">{{ $quest->opt4 }}; </input><br />
                    <input type="radio" name="{{$quest->ques}}" id="{{ $quest->ques}}">{{ $quest->opt5 }}; </input><br /><p>&nbsp;</p>
                    @endforeach
                    </form>
                </div>
                <div>{{ $question->links() }}</div>
            </div>
        </div>
    </div>
</div>
@endsection
