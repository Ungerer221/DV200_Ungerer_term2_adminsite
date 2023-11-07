<?php
include 'db.php';

$sql = "SELECT * FROM doctor_table";
$result = $conn->query($sql);

echo "<select name= 'doctorId' id='doctors'>";

while ($row = $result->fetch_assoc()) {

    echo "<option value='" . $row['name'] . "'> " . $row['surname'] . " </option>";
    // <option value="name"> name </option>

}

echo "</select>";

$conn->close();

?>