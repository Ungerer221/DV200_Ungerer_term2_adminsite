<?php

include 'db.php';

$id = $_POST['id'];

$name = $_POST['name'];
$surname = $_POST['surname'];
// $surname = $_POST["surname"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$password = $_POST["password"];
$phone_number = $_POST["phone_number"];
$medical_aid_number = $_POST["medical_aid_number"];
$diagnose_code = $_POST["diagnose_code"];
$patient_id = $_POST["patient_id"];

// this need to be fixed but iv done it how we where shown in class
$sql = "UPDATE patient_table SET name = '$name', surname = '$surname', age = '$age', gender = '$gender', email = '$email', password = '$password', phone_number = '$phone_number', medical_aid_number='$medical_aid_number', diagnose_code='$diagnose_code', patient_id='$patient_id' WHERE id = '$id'";

$result = $conn->query($sql);

$conn->close();
header("location: patient.php");

?>