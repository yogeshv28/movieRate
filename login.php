<?php

$email = $_GET["email"];
$ps = $_GET["psw"];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("connection failed : " . $conn->connect_error);
}

$sql = "SELECT `userid`, `username`, `email`, `password` FROM usertable where email='". $email . "' and password='" . $ps . "';";

//echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        echo "Login Success!";
        header("location: portfolio.html");
    }
} else {
    echo "Login Failed!";
}
$conn->close();

?>