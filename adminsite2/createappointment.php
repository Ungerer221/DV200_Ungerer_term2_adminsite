<?php
// Before everything, acknowledge this file. Similar to react's Import. We will use this like a React component.
include 'db.php';

//Include the ID of the element you get it from in the square brackets.
$patientId = $_POST['patientId'];
$doctorId = $_POST['doctorId'];
$room = $_POST['room'];
$date = $_POST['date'];
$time = $_POST['time'];


// sql query:
// $sql = "INSERT INTO appointments (patientId, doctorId, room, date, time ) VALUES('$patientId', '$doctorId', '$room', '$date', '$time')";
$sql = "INSERT INTO `appointment_table`(`doctorId`, `patientId`, `room`, `date`, `time`) VALUES ('$doctorId','$patientId','$room','$date','$time')";

$conn->query($sql);


$conn->close();


header("location: main.php");

?>