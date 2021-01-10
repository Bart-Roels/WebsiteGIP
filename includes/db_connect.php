<?php
    function get_connection() {
        $mysqli=mysqli_connect('automotivechecker.be.mysql', 'automotivechecker_betestdatabase', '123456', 'automotivechecker_betestdatabase');
        if ($mysqli->connect_error) 
        {
        exit();
        return;
        }
        return $mysqli;
    }
?>