<?php
// Includes
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
include_once 'includes/process_login.php';
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <!-- Meta informatie -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
	<!-- Titel -->
	<title>Login</title>
	
	<!-- CSS files -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="assets/css/stylesIndex.css" rel="stylesheet" type="text/css" >
	
</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="assets/img/logo.jpg" alt="logo">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Login</h4>
							<form method="POST" class="my-login-validation" novalidate="" action="index.php">
							    <?php include('error.php'); ?>
								<div class="form-group">
									<label for="username">Username</label>
									<input id="username" type="text" class="form-control" name="username" value="" required autofocus>
								</div>
								<div class="form-group">
									<label for="password">Wachtwoord
										<a href="forgot.html" class="float-right">
											Wachtwoord vergeten?
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								</div>
								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block" name="login_user">Login</button>
								</div>
								<div class="mt-4 text-center">
									Geen account? <a href="register.php">Aanmelden</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2020 &mdash; AutomotiveChecker
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>
