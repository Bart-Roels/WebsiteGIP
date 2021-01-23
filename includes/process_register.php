<?php
    // Includes
    include_once 'db_connect.php';
    include_once 'functions.php';
    sec_session_start();
    // variablen
    $mysqli = get_connection();
    $errors = array();
    
    
    if (isset($_POST['reg_user'])) 
    {
        // Informatie van post halen
        	$username = $_POST['username'];
			$email = $_POST['email'];
			$password_1 = $_POST['password_1'];
			$password_2 = $_POST['password_2'];
        
        // Cheken op lege input
        if (empty($username)) { array_push($errors, "Gebruikersnaam is verplicht!"); }
        if (empty($email)) { array_push($errors, "Email is verplicht!"); }
        if (empty($password_1)) { array_push($errors, "Wachtwoord is verplicht!"); }
        if ($password_1 != $password_2) 
        {
        	array_push($errors, "De twee wachtwoorden komen niet overeen!");
        }
        
        // Informatie uit db halen
        $user_check_query = "SELECT * FROM TBLgebruikers WHERE Username='$username' OR Username='$email' LIMIT 1";
        $result = mysqli_query($mysqli, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        
        if ($user) { // Kijken of user al bestaat!
            if ($user['Username'] === $username) 
            {
                array_push($errors, "Gebruiker bestaat al!");
            }
            if ($user['Username'] === $email) 
            {
                array_push($errors, "Email bestaat al!");
            }
        }
        
        // Rregistreer gebruiker
        if (count($errors) == 0) {
            
            $password = md5($password_1);//encrypt the password before saving in the database
			// $mysqli = "INSERT INTO `TBLgebruikers`(`Username`, `Email`, `Wachtwoord`) VALUES ('$username','$email','$password')";
			// $mysqli  = "INSERT INTO `TBLgebruikers`(`Username`, `Email`, `Wachtwoord`) VALUES (1,2,3)";
			$query  = "INSERT INTO `TBLgebruikers`(`Username`, `Email`, `Wachtwoord`) VALUES ('$username','$email','$password')";
            mysqli_query($mysqli, $query);

        }
    }
?>
