<?php function sec_session_start() {
    if($_SERVER["HTTPS"] !="on") {
        // ist https?
        header("Location: https://". $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
        exit();
    }

    // Pakt sec sessie.
    $session_name='sec_session_id';
    $secure='SECURE';
    $httponly=true;

    // forceer gebruik cokies
    if (ini_set('session.use_only_cookies', 1)===FALSE) {
        header("Location: ../error.php?err=Could not initiate a safe session (ini_set)");
        exit();
    }

    // Gets current cookies params.
    $cookieParams=session_get_cookie_params();
    session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly);
    // Sets the session name to the one set above.
    session_name($session_name);
    session_start(); // Start the PHP session 
    session_regenerate_id(); // regenerated the session, delete the old one. 
}


function checkIfLoggedIn() 
{
    //echo $_SESSION['username'];
    if($_SESSION['username'] == "") 
    {
        //echo "geen gebruiker";
        header("Location: ../index.php");
        exit();
    }  
}







?>