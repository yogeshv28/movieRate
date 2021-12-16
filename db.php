<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

$con = mysqli_connect($servername, $username, $password, $dbname);


if ($con){
    echo "CONNECTED SUCCESSFULLY!";

} else{
    die("connection failed : " . $conn->connect_error);
}



?>