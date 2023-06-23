<?php
include 'dp.php';

// select from the table 
$sql = "SELECT * FROM patient";
$result = $conn->query($sql);

echo "<select>";

while ($row = $result->fetch_assoc()) {
   
    echo "<option value='" . $row['name'] . "'> " . $row['name'] . " </option>";

}

echo "</select>";

$conn->close();

?>