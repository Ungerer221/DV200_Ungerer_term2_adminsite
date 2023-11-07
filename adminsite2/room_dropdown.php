<?php
include 'db.php';

$sql = "SELECT * FROM room";
$result = $conn->query($sql);

echo "<select name= 'roomId' id='roomId'>";

while ($row = $result->fetch_assoc()) {

    echo "<option value='" . $row['roomId'] . "'> " . $row['roomId'] . " </option>";
    // <option value="name"> name </option>

}

echo "</select>";

$conn->close();

?>