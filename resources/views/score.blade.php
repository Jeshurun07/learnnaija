@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Select') }}</div>

                <div class="card-body">

<div id="restart">
<form method="POST" action="{{ action('QuesRetriever@deleteSession' )}}">
                        @csrf
                        <div id="result"></div><br />
                        <input type="submit" value="Take another test" onclick="deleteCookies();"></input>
                        </form></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/src/cookie.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jsfile.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/score.js') }}"></script>
<div> Welcome
{{  var_dump($_COOKIE) }}
</div>
</body>
</html>