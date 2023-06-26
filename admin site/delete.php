<?php
// error_reporting(0); 

// somtimes called config.phph 
include 'db.php';

// using the get methode
$patient_id = $_GET['id'];

//some sql
$sql = "DELETE FROM patient WHERE id = $patient_id";


$conn->query($sql);

$conn->close();
header("location: patient.php");

?>