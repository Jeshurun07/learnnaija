@extends('layouts.app')
<header id="header" class="fixed-top">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'LearnNaija') }}
                </a>
                </h1>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <li class="nav-item"><a href="#" class="nav-link">Frequently Asked</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        </header>
    <!-- End Header -->

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Instruction: Attempt all questions') }}
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
                    <li><input type="radio" name="{{ $quest->questionId }}" id="{{ $quest->questionId }}" value="a"> {{ $quest->opt1 }} </input></li><br />
                    <li><input type="radio" name="{{ $quest->questionId }}" id="{{ $quest->questionId }}" value="b"> {{ $quest->opt2 }} </input></li><br />
                    <li><input type="radio" name="{{ $quest->questionId }}" id="{{ $quest->questionId }}" value="c"> {{ $quest->opt3 }} </input></li><br />
                    <li><input type="radio" name="{{ $quest->questionId }}" id="{{ $quest->questionId }}" value="d"> {{ $quest->opt4 }} </input></li><br />
                    <li><input type="radio" name="{{ $quest->questionId }}" id="{{ $quest->questionId }}" value="e"> {{ $quest->opt5 }} </input></li><br />
                    <input type="hidden" name="cor" id="cor" value="{{ $quest->corr }}"></input><br /></ul><p>&nbsp;</p>
                    </div>
                   
                    @endforeach
                    </div>
                    <div class="end-test">
                    <button type="submit" class="btn btn-danger" id="endTest" name="endTest" style="float: right; margin-right:10px;">End Exam</button>
                    </div>
                    </form>
                </div>
                <div> {{ $question->links() }}</div>
            </div>
        </div>
    </div>
</div>@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/src/cookie.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jsfile.js') }}"></script>

