<?php

$name = $_POST["name"];
$email = $_POST["email"];
$usern = $_POST["usern"];
$phone = $_POST["phone"];
$passwd = $_POST["passwd"];






include "db.php";
$sql = "INSERT INTO active(name, usern, email, phone, passwd) VALUES('$name', '$usern', '$email', '$phone','$passwd')";

$result = mysqli_query($conn, $sql);

if($result){

    header("location: home.php");

}
else{
    echo("some thing is wrong with the database");
}


?>