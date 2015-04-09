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
<hr>
<p align="center">
	Workshop on Fun with Computer Vision
</p>
<p align="center">
	Software Installation Guide
</p>
<hr>
<p>This file contains instructions to install</p>
<ul>
	<li><b>Python : Programming Language</b></li><br>
	<li><b>Numpy : Library for matrix computations</b></li><br>
	<li><b>OpenCV : Library of computing functions for image processing</b></li><br>

</ul>

<p>
	Please follow the steps in the same order as given below:<br><br>
<b>Note: Do not alter their default paths during installation.</b>
</p>
	@if(isset($error))
	<div style="background-color:#FF3333;padding:20px;">{{$error}}</div><br/><br/>
	@endif
					
				<ol>
					<li><b>Python</b></li>
				
				<ul>
					<li>Download Python from the following button:<br><br>
					<a href="{{URL::route('dwnPython2_7_9')}}" class="btn">Python 2.7.9</a><br/><br/>
					</li>
					<li>Double-click the downloaded file to commence installation</li>

				</ul>
				<br>
					<li><b>Numpy</b></li>
				<ul>
					<li>Download Numpy from the following button: <br><br>
					<a href="{{URL::route('dwnldPythonNumpy')}}" class="btn">Python Numpy</a><br/><br/>
					</li>
					<li>Double-click the downloaded file to commence installation</li>

				</ul>
				<br>
					<li><b>OpenCV</b></li>
					<ul>
					<li>Download OpenCV from the following button:<br><br>
					<a href="{{URL::route('dwnldOpenCV')}}" class="btn">Open CV for Python</a><br/><br/>
					</li>
					<li>Double-click the downloaded file to commence installation</li><br>
					<li>After installation of opencv navigate to the installation folder opencv/build/python/2.7</li><br>
					<li>Copy the file cv2.pyd to python installation folder C:/Python27/lib/site-packages</li><br>
				</ul>
				
				
				</ol>
	</body>
</html>
