<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="robots" content="follow">

	<title>PHP Login System</title>

	<base href="/"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.27.4/css/uikit.min.css"/>
</head>

<body>

	<div class="uk-container uk-container-center">
		<div class="uk-grid">
			<div class="uk-width-1-2 uk-container-center">
				<div class="uk-panel uk-panel-box uk-panel-box-primary">
					<form action="" class="uk-form js-login">

						<div class="uk-form-row">
							<label for="" class="uk-form-label">Email</label>
							<div class="uk-form-controls">
								<input type="email" class="uk-input" required="required" placeholder="Enter email address">
							</div>
						</div>
						<div class="uk-form-row">
							<label for="" class="uk-form-label">Password</label>
							<div class="uk-form-controls">
								<input type="password" class="uk-input" required="required" placeholder="Password">
							</div>
						</div>
						<div class="uk-form-row">
							<button class="uk-button uk-button-primary" type="submit">Login</button>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>


	<!-- jQuery is required -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- UIkit JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.27.4/js/uikit.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.27.4/js/uikit-icons.min.js"></script>

	<script src="https://use.fontawesome.com/b94707349b.js"></script>
</body>

</html>