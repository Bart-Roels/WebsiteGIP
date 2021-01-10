<?php
    include_once 'db_connect.php';
    include_once 'functions.php';
    sec_session_start();

    // variablen
    $mysqli = get_connection();
    $errors = array();


    // Login systeem    
    if (isset($_POST['username'], $_POST['password'])) 
    {
        // Error handeling 
        if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($mysqli, $_POST['username']);
        $password = mysqli_real_escape_string($mysqli, $_POST['password']);
          
        if (empty($username)) 
        {
            array_push($errors, "Gelieve gebruikersnaam in te vullen!");
        }
        if (empty($password)) {
            array_push($errors, "Gelieve wachtwoord in te vullen!");
        }
        if (count($errors) == 0) 
        {
            $password = md5($password);
            $query = "SELECT * FROM TBLgebruikers WHERE Username='$username' AND Wachtwoord='$password'";
            $results = mysqli_query($mysqli, $query);
        if (mysqli_num_rows($results) == 1) 
        {
            $row = mysqli_fetch_array($results);
            $geactiveerd = $row['geactiveerd'];
            if($geactiveerd == 1)
            {
                $_SESSION['username'] = $username;
                // Login gelukt
                header("Location: ../dash.php");
                exit();
            }
            else
            {
                array_push($errors, "Account moet nog geactiveerd worden!");   
            }
        }
        else
        {
            array_push($errors, "Verkeerde wachtwoord/username combinatie!");    
        }
        }
    } 
}
?>