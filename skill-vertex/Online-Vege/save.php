<?php

$fistname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$number = $_POST["number"];

//database connection
$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn-> prepare("insert into review(firstname, lastname, email, number)
    values(?, ?, ?, ?)");
    $stmt->bind_param("sssi", $firstname, $lastname, $email, $number);
    $stmt->execute();
    echo " review send successfully..!";
    $stmt->close();
    $conn->close();
}
?>