<?php 
    $servername = "localhost";
    $dbname = "group31";

    $db=mysqli_connect($servername, $username, $password, $dbname);
    // $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if(mysqli_connect_errno()){
        echo "failed to connect: " . mysqli_connect_errno();
    }
?>