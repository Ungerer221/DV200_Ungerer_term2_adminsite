<?php
include 'db.php';

$sql = "SELECT * FROM patient_table";
$result = $conn->query($sql);

echo "<select name= 'patientId' id='patientId'>";

while ($row = $result->fetch_assoc()) {

    echo "<option value='" . $row['name'] . "'> " . $row['surname'] . " </option>";
    // <option value="name"> name </option>

}

echo "</select>";

$conn->close();

?>