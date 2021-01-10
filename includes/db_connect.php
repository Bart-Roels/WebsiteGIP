<?php
    function get_connection() {
        $mysqli=mysqli_connect('automotivechecker.be.mysql', 'automotivechecker_bebiib', '20033002', 'automotivechecker_bebiib');
        if ($mysqli->connect_error) 
        {
        exit();
        return;
        }
        return $mysqli;
    }
?>