<!DOCTYPE html>
<html>
<head>
	<title>eYantra Feedback</title>
	<style>
	p {
	font-size: 100%;
	}
	.btn {
				background-color: #337ab7;border-color: #2e6da4;font-size: 14px;font-weight: 400;line-height: 1.42857143;text-align: center;color:white;text-decoration:none;border: 1px solid transparent;border-radius: 4px;color: #fff;margin-top: 5px;margin-bottom: 5px;padding: 6px 12px;
			}
	</style>
</head>
<body style="width:70%;margin-left:15%;">
<img src="{{URL::asset('logo.png')}}" alt="e-Yantra"/>

<p align="center">
	<strong>e-Yantra Symposium (eYS) 2015</strong>
</p>
<p align="center">
	<strong>10<sup>th</sup>-11<sup>th</sup> April 2015</strong>
</p>
<p align="center"><a href="{{URL::route('home')}}" class="btn">Take to Homepage</a>
</p>
<hr/>
<p align="center">
	Workshop on Fun with Computer Vision
</p>
<p align="center">
	Feedback form
</p>
	@if(isset($error))
	<div style="background-color:#FF3333;padding:20px;">{{$error}}</div><br/><br/>
	@endif
	<form action="{{URL::route('feedback_data') }}" method="POST"> 
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	<table>

	<tr><td style="color:red;">All fields are compulsory!</td></tr>
	<tr><td>Name of the participant: </td><td><input type="text" name="name"></td></tr>
	<tr><td>Email: </td><td><input type="text" name="email"></td></tr>
	<tr><td>Name of the College: </td><td><input type="text" name="college"></td></tr>
	
	</table>
<p>
<input type="radio" name="desig" value="teacher" checked>Teacher &nbsp;&nbsp;
<input type="radio" name="desig" value="student">Student<br>
</p>
<hr/><br/>
<p>
	<em>Please tick the appropriate option: </em></p>
</p>

<p>
	1. Is this your first tutorial on Computer Vision and Image processing?<br><br>
	<input type="radio" name="first" value="yes" checked>Yes<br>
	<input type="radio" name="first" value="no">No<br>

</p>
<hr/><br/>
<p>
	2. The theoretical content of the workshop was adequate to understand the concepts:<br><br>
	<input type="radio" name="sec" value="strongly_agree" checked>Strongly agree<br>
	<input type="radio" name="sec" value="agree">Agree<br>
	<input type="radio" name="sec" value="neutral">Neutral<br>
	<input type="radio" name="sec" value="disagree">Disagree<br>
	<input type="radio" name="sec" value="strongly_disagree">Strongly disagree<br>
</p>
<hr/><br/>
<p>
	3. The hands on approach of the workshop was very effective:<br><br>
	<input type="radio" name="third" value="strongly_agree" checked>Strongly agree<br>
	<input type="radio" name="third" value="agree">Agree<br>
	<input type="radio" name="third" value="neutral">Neutral<br>
	<input type="radio" name="third" value="disagree">Disagree<br>
	<input type="radio" name="third" value="strongly_disagree">Strongly disagree<br>
</p>

<hr/><br/>
<p>
	4. The content covered in the workshop was:<br><br>
	<input type="radio" name="fourth" value="very_easy_to_understand" checked>Very Easy to understand<br>
	<input type="radio" name="fourth" value="easy_to_understand">Easy to understand<br>
	<input type="radio" name="fourth" value="difficult_to_understand">Difficult to understand<br>
	
</p>
<hr/><br/>
<p>
	5. Was the workshop interactive?<br><br>
	<input type="radio" name="fifth" value="yes" checked>Yes<br>
	<input type="radio" name="fifth" value="no">No<br>
	<input type="radio" name="fifth" value="maybe_improved">May be improved<br>
</p>
<hr/><br/>
<p>
	6. Will the content covered in the workshop help you in your teaching ?<br><br>
	<input type="radio" name="sixth" value="yes" checked>Yes<br>
	<input type="radio" name="sixth" value="no">No<br>
	<input type="radio" name="sixth" value="not_sure">Not sure<br>
</p>
<hr/><br/>
<p>
	7. Do you wish to recommend any Computer Vision software tools to be included in the workshop?<br><br>
	<textarea name="seventh" rows="4" cols="50"></textarea>
</p>
<hr/><br/>
<p>
	8. Would you like to recommend any specific topic to be included in a future workshop?<br><br>
	<textarea name="eighth" rows="4" cols="50"></textarea>
</p>
<hr/><br/>
<p>
	9. Are you satisfied with the overall workshop arrangements?<br><br>
	<input type="radio" name="ninth" value="yes" checked>Yes<br>
	<input type="radio" name="ninth" value="no">No<br>
	<input type="radio" name="ninth" value="needs_to_be_improved">Needs to be improved<br>
</p>
<hr><br>
<p>
	10. Would you like to add anything more?<br><br>
	<textarea name="tenth" rows="4" cols="50"></textarea>
</p>
<hr/>
<br/>
<input type="submit" class="btn" value="Submit">
</form>
</body>
</html>