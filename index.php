<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trip";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['other'];

$sql = ("INSERT INTO trip (name, age, gender, email, phone, other, dt) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())"); 
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
$conn->close();

?>
