<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "rippzo";

    $connection = mysqli_connect($servername, $username, $password, $database);

    if(!$connection == true){
        echo "Failed to connect to the database";
    }
?>