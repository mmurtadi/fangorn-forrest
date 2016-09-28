<!DOCTYPE html>
<html lang="en">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WeatherCheck!</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">




<style>
		html, body {
			height:100%;
		}
		.container {
 	background-image:url("http://www.solidbackgrounds.com/images/2880x1800/2880x1800-tiffany-blue-solid-color-background.jpg");
			width:100%;
			height:100%;
 	background-size:cover;
 	background-position:center;
 	padding-top:100px;
		}
		.center {
 	text-align:center;
		}
		.white {
			color:white;
		}
		p {
 	padding-top:15px;
 	padding-bottom:15px;
		}
		button {
 	margin-top:20px;
 	margin-bottom:20px;
		}
		.alert {
 	margin-top:20px;
			display:none;
		}
</style>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 center marginTop">
			<h1 class="center white">WeatherCheck!</h1>
			<p  class="lead center white"><strong>enter your city and get a 3 day forecast</strong></p>
		

		<form action="" method="POST" role="form">
			
		
			<div class="form-group">
			
				<input type="text" class="form-control" id="city" placeholder="Eg. London, San Francisco...">
			</div>
		
			
		
			<button id="findMyWeather" type="submit" class="btn btn-success btn-lg center">Let's Take A Look!</button>
		</form>
<div class="alert alert-success" id ="success">
			we did it!
		</div>
		<div class="alert alert-danger" id="fail">
			Could not find your city. Please try again.
		</div>
		<div class="alert alert-danger" id="nocity">
			Please, enter a city!
		</div>
		</div>

		
	</div>
</div>
	
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
<script>
	$("#findMyWeather").click(function(event){
		event.preventDefault();
		$(".alert").hide();
		if($("#city").val() != "") {
		   $.get("scraper.php?city="+$("#city").val(),function(data){
		   
		if(data=="") {
			
			$("#fail").fadeIn();
			
		   } else {
		   
			$("#success").html(data).fadeIn();
		  }
		});
		
		} else {
			
			$("#noCity").fadeIn();
		
		}
	});
	
</script>

</body>
</html>