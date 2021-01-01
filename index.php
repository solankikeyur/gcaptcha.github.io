<?php 

if(isset($_POST)) {

	print_r($_POST);
}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="https://www.google.com/recaptcha/api.js"></script>
	<title>Google reCAPTCHA</title>
</head>
<body>
	<div class="container">
		<form method="post">
			<h1>Learn Google reCAPTCHA</h1>
			<div class="form-group">
				<label>Firstname</label>
				<input type="text" name="first_name" class="form-control" >
			</div>
			<div class="form-group">
				<label>Lastname</label>
				<input type="text" name="last_name" class="form-control" >
			</div>
			<button class="g-recaptcha btn btn-primary" 
	        data-sitekey="6Le9tBwaAAAAAMCvw2j4hDY7lNbE9OYPKR45m9WZ" 
	        data-callback='onSubmit' 
	        data-action='submit'>Submit</button>
		</form>
	</div>

</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <script type="text/javascript">
 	function onSubmit(token) {
     console.log(token);
   }
 </script>
</html>