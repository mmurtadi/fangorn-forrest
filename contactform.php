<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Moe Murtadi</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">


</head>
		<body>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 emailForm">
						<h1>Contact me right now!</h1>
						<?php echo $result; ?>
						<p class="lead">Looking to build an App or Website? - Send me a quick message and i'll be in touch soon!</p>
						<form method="post">
							<div class="form-group">
								<label for="name">Your Name:</label>
								<input type="text" name="name" class="form-control" placeholder="Your Name"
									   value="<?php echo $_POST['name']; ?>" />
							</div>
							<div class="form-group">
								<label for="email">Your Email:</label>
								<input type="email" name="email" class="form-control" placeholder="Your Email"
									   value="<?php echo $_POST['email']; ?>" />
							</div>
							<div class="form-group">
								<label for="comment">Your Comment:</label>
								<textarea class="form-control" name="comment"><?php echo $_POST['comment']; ?></textarea>
							</div>
							<input type="submit" name="submit" class="btn btn-success btn-lg" value="Submit"/>
						</form>
					</div>
				</div>
			</div>
			<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		</body>
	</html>

<?php

	if ($_POST["submit"]) {
		
		if (!$_POST['name']) {

			$error="<br />Please enter your name";

		}
			
		if (!$_POST['email']) {
			$error.="<br />Please enter your email address";
	 	 }

		if (!$_POST['comment']) {
			
			$error.="<br/>Please enter a comment";

		}
			
		if ($_POST['email']!="" AND !filter_var($_POST['email'],
												FILTER_VALIDATE_EMAIL)) {
 	 	 	
			$error.="<br />Please enter a valid email address";
		}
			
		if ($error) {

			$result='<div class="alert alert-danger"><strong>There were error(s)
			in your form:</strong>'.$error.'</div>';

		} else {

			if (mail("moe@mmurtadi.com", "Comment from website!", "Name: ".
					 $_POST['name']."

	Email: ".$_POST['email']."

	Comment: ".$_POST['comment'])) {

				$result='<div class="alert alert-success"><strong>Thank
				you!</strong> I\'ll be in touch.</div>';

			} else {

				$result='<div class="alert alert-danger">Sorry, there was
				an error sending your message. Please try again later.</div>';

			}
		}
	}
?>