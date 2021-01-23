<?php
    function get_connection() {
        $mysqli=mysqli_connect('localhost:3306', 'BIIBW_automotive', 'tt4c~U65es#kU929', 'BIIBWeb_automotive');
        if ($mysqli->connect_error) 
        {
        exit();
        return;
        }
        return $mysqli;
    }
?>