<?php

error_reporting(0); 

include 'db.php'; //should be db.php

$sql = "SELECT * FROM `patient_table`";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "<tr>";

    if ($row['patientId'] == $_GET['id']) {
        echo '<form class="form-inline m-2" action="update.php" method="POST">';

        echo '<td><input type="text" class="form-control" name="name" value="' . $row['name'] . '"></td>';

        echo '<td><input type="text" class="form-control" name="surname" value="' . $row['surname'] . '"></td>';
        
        echo '<td><input type="number" class="form-control" name="age" value="' . $row['age'] . '"></td>';

        echo '<td><input type="text" class="form-control" name="gender" value="' . $row['gender'] . '"></td>';

        
        echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';

        echo '<input type="hidden" name="id" value="' . $row['id'] . '">';

        echo '</form>';
    } else {
        echo "<td>" . $row['name'] . "</td>";
        echo "<td" .$row['surname'] . "</td>";
        echo "<td>" . $row['age'] . "</td>";

        echo '<td><a class="btn btn-primary" href="patient.php?id=' . $row['patientId'] . '" role="button"> Update </a></td>';
    }

    echo '<td><a class="btn btn-danger" href="patient_delete.php?id=' . $row['id'] . '" role="button"> delete </a></td>';
    echo "</tr>";

}
;


// to close the connection
$conn->close();

?>