<?php 
	//allow the config
	define('_CONFIG_', true);

	//require the config
	require_once "inc/config.php"; 
?>

<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="robots" content="follow">

	<title>PHP Login System</title>

	<base href="http://localhost:8080/php-login-system/"/>
	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.27.4/css/uikit.min.css"/>
</head>

<body>

	<div class="uk-container uk-container-center">
		<div class="uk-grid">
			<div class="uk-width-1-2 uk-container-center">
				<div class="uk-panel uk-panel-box uk-panel-box-primary">
					 
					<h1><?php echo "Hello, User."; ?></h1>
					<p><?php echo "Today is " . date("m/d/Y"); ?></p>
					
					<a href="login.php">Login</a> | <a href="register.php">Register</a>
					
				</div>
			</div>
		</div>
	</div>

	<?php require_once "inc/footer.php"; ?>

</body>

</html>