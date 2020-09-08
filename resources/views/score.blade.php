@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Select') }}</div>

                <div class="card-body">
<div id ="result">
</div>
<div id="restart"><a href="#" onclick="deleteCookies();">Take another test!</a></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/src/cookie.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jsfile.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/score.js') }}"></script>
</body>
</html>