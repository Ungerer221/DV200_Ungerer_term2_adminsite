<?php
// error_reporting(0); 

// somtimes called config.phph 
include 'db.php';

// using the get methode
$id = $_GET['id'];

//some sql
$sql = "DELETE FROM `patient_table` WHERE `patient_table`.`id` = $id;";

$conn->query($sql);

$conn->close();
header("location: patient.php");

?>