<?php


$un = $_POST['username'];
$email = $_POST['email'];
$pwd = $_POST['psw'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

$con = mysqli_connect($servername, $username, $password, $dbname);

$query = "insert into usertable (username, email, password)values('$un', '$email', '$pwd')";


$result = mysqli_query($con,$query);

if($result){
    header("location: passwordvalidation.html");
}
else{
    echo "ERROR! PLEASE CHECK YOUR INTERNET CONNECTION";
}

?>