<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
include_once 'includes/process_register.php';
$mysqli = get_connection();
$email = isset($_POST['email']) ? $_POST['email'] : "";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta informatie -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<!-- Titel -->
	<title>Login</title>
	
	<!-- CSS files -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/stylesIndex.css">
</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="assets/img/logo.jpg" alt="bootstrap 4 login page">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Registreer</h4>
							<form method="post" class="my-login-validation" action="register.php" >		
							    <?php include('error.php'); ?>
								<div class="form-group">
									<label>Username</label>
									<input class="form-control"type="text" name="username" value="<?php echo $username; ?>">
								</div>

								<div class="form-group">
									<label>Email</label>
									<input class="form-control" type="email" name="email" value="<?php echo $email; ?>">
								</div>

								<div class="form-group">
									<label>Wachtwoord</label>
									<input type="password" class="form-control" name="password_1">
								</div>

								<div class="form-group">
									<label>Heraal wachtwoord</label>
									<input type="password" class="form-control" name="password_2">
								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="agree" id="agree" class="custom-control-input" required data-eye>
										<label for="agree" class="custom-control-label">Ik accepteer hierbij de <a href="#">algemene voorwaarden</a></label>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block" name="reg_user">Registreer</button>
								</div>
								<div class="mt-4 text-center">
									Heb je al een account? <a href="index.php">Login</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2021 &mdash; AutomotiveChecker
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>