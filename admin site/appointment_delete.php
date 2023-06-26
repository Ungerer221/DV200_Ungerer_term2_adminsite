<?php
// error_reporting(0); 

// somtimes called config.phph 
include 'db.php';

// using the get methode
$id = $_GET['id'];

//some sql
$sql = "DELETE FROM `appointment_table` WHERE `appointment_table`.`id` = $id;";

$conn->query($sql);

$conn->close();
header("location: main.php");

?>