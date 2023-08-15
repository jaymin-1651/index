<?php
    // error_reporting(0);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "database";

    $con = mysqli_connect($servername, $username, $password, $dbname);
    if ($con) {
        echo "connection ok";
    } else {
        echo "connection failed";
    }
    ?>