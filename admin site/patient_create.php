<?php
// Before everything, acknowledge this file. Similar to react's Import. We will use this like a React component.
include 'db.php';

//Include the ID of the element you get it from in the square brackets.
$name = $_POST["name"];
$surname = $_POST["surname"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$password = $_POST["password"];
$phone_number = $_POST["phone_number"];

$medical_aid_number = $_POST["medical_aid_number"];
$diagnose_code = $_POST["diagnose_code"];
$patient_id = $_POST["patient_id"];



// sql query:
$sql = "INSERT INTO `patient_table`(`id`, `name`, `surname`, `age`, `gender`, `email`, `password`,`Phone_number`,`medical_aid_number`,`diagnose_code`,`patient_id`) VALUES ('[value-1]','$name','$surname','$age', '$gender', '$email', '$password','$phone_number','$medical_aid_number','$diagnose_code','$patient_id' )";

//$conn is from db.php. This runs the code with the authentication from the db.php file.
$conn->query($sql);

//You need to close the connection after running the sql to avoid errors.
$conn->close();

// This gives an instruction to go back to a different page
header("location: patient.php");

?>