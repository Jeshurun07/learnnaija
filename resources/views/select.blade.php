@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Select') }}</div>

                <div class="card-body">
<h1>This is where the action begins</h1>
<form method="POST" action="{{ action('QuesRetriever@questView') }}">
                        @csrf
    <div>
<label for="subject">Select the level of difficulty</label>
<select name="level" id="level">
<option value="adv">Advance (JAMB, 'A'levels) </option>
<option value="int">Intermediate (WAEC, NECO) </option>
<option value="basic">Basic(BECE, NABTEB) </option>
</select><br />
<label for="subject">Select subject</label>
<select name="subj" id="subj">
<option value="bio">Biology</option>
<option value="cmm">Commercial</option>
</select><br />
<input name='submit' id="submit" type="submit"></input>
</form>
<!--Will come back to the display using jquery later*-->
<div id="js-jss-subj" style="display: none">

		<div id="js-sss-subj" style="display: none">
	 		<h2>Step 2: Select the Subject</h2>
			<div class="form-check">
					<input type="radio" name="subject" id="rad_5" class="form-check-input" value="eng">
					<label class="form-check-label" for="rad_5">English Language</label>
			</div>
			<div class="form-check">
					<input type="radio" name="subject" id="rad_6" class="form-check-input" value="mth">
					<label class="form-check-label" for="rad_6">Mathematics</label>
			</div>
			<div class="form-check">
					<input type="radio" name="subject" id="rad_7" class="form-check-input" value="phy">
					<label class="form-check-label" for="rad_7">Physics</label>
			</div>
			<div class="form-check">
					<input type="radio" name="subject" id="rad_8" class="form-check-input" value="bio">
					<label class="form-check-label" for="rad_8">Biology</label>
			</div>
			<div class="form-check">
					<input type="radio" name="subject" id="rad_9" class="form-check-input" value="cmm">
					<label class="form-check-label" for="rad_9">Commerce</label>
			</div>
			<div class="form-check">
					<input type="radio" name="subject" id="rad_10" class="form-check-input" value="chm">
					<label class="form-check-label" for="rad_10">Chemistry</label>
			</div>
			<div class="form-check">
					<input type="radio" name="subject" id="rad_11" class="form-check-input" value="eco">
					<label class="form-check-label" for="rad_11">Economics</label>
			</div>
			<div class="form-check">
					<input type="radio" name="subject" id="rad_12" class="form-check-input" value="gov">
					<label class="form-check-label" for="rad_12">Government</label>
			</div>
			<div class="form-check">
					<input type="radio" name="subject" id="rad_13" class="form-check-input" value="phy">
					<label class="form-check-label" for="rad_13">Physics</label>
			</div>
			<div class="form-check">
					<input type="radio" name="subject" id="rad_14" class="form-check-input" value="acc">
					<label class="form-check-label" for="rad_14">Principles of Accounts</label>
			</div>
		</div>
	</div>
</form>
<script type="text/javascript" src="{{asset('js/custom/jsfile.js')}}"></script>
</body>
</html>