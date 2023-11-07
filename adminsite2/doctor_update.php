<?php

include 'db.php';

$id = $_POST['id'];

$name = $_POST['name'];
$surname = $_POST['surname'];
$surname = $_POST["surname"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$password = $_POST["password"];
$phone_number = $_POST["phone_number"];
$specialisation = $_POST["specialisation"];

$sql = "UPDATE doctor_table SET name = '$name', surname = '$surname', age = '$age', gender = '$gender', email = '$email', password = '$password', phone_number = '$phone_number', specialisation = '$specialisation' WHERE id = '$id'";

$result = $conn->query($sql);

$conn->close();
header("location: doctor.php");

?>