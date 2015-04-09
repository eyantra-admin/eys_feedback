<html>
	<head>
		<title>e-Yantra</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			.btn {
				background-color: #337ab7;border-color: #2e6da4;font-size: 14px;font-weight: 400;line-height: 1.42857143;text-align: center;color:white;text-decoration:none;border: 1px solid transparent;border-radius: 4px;color: #fff;margin-top: 5px;margin-bottom: 5px;padding: 6px 12px;
			}
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				/*color: #F08080;*/
				color: #F00000 ;
				display: table;
				font-weight: 100;
				
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 0px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<img src="{{URL::asset('logo.png')}}" alt="e-Yantra"/><br/><br/>
				<!-- <div class="title">e-Yantra</div> -->
				<div class="quote">Engineering a better tomorrow</div><br/>
				<div class="quote">{{Inspiring::quote()}}</div><br/><br/>
				<a href="{{URL::route('dwnResourcesLand')}}" class="btn">Download Workshop Resources</a><br/><br/>
				<a href="{{URL::route('feedback_form')}}" class="btn">Workshop Feedback</a>
			</div>
		</div>
	</body>
</html>
