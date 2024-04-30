<?php

$servername ="localhost";
$username ="dckap";
$password ="Dckap2023Ecommerce";
$dpname ="Ecommerce";

$conn = new mysqli($servername, $username, $password, $dpname);

$name =$_POST["fname"];
$email =$_POST["email"];
$password =$_POST["password"];

$sql =("INSERT INTO user_information (name, email, password)
VALUES ('$name','$email','$password')");

if($conn->query($sql)===TRUE){
    // echo "New record created successfully";
    header("location:index.php");
    
}
else{
    echo "New record not created successfully";
}

$conn->close();
?>