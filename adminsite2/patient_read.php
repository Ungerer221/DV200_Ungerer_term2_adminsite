<?php

error_reporting(0); 

include 'db.php'; //should be db.php

$sql = "SELECT * FROM `patient_table`";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "<tr>";

    if ($row['id'] == $_GET['id']) {
        echo '<form class="form-inline m-2" action="patient_update.php" method="POST">';

        echo '<td><input type="text" class="form-control" name="name" value="' . $row['name'] . '"></td>';

        echo '<td><input type="text" class="form-control" name="surname" value="' . $row['surname'] . '"></td>';
        
        echo '<td><input type="number" class="form-control" name="age" value="' . $row['age'] . '"></td>';

        echo '<td><input type="text" class="form-control" name="gender" value="' . $row['gender'] . '"></td>';

        echo '<td><input type="text" class="form-control" name="email" value="' . $row['email'] . '"></td>';

        echo '<td><input type="text" class="form-control" name="password" value="' . $row['password'] . '"></td>';

        echo '<td><input type="text" class="form-control" name="phone_number" value="' . $row['phone_number'] . '"></td>';

        echo '<td><input type="text" class="form-control" name="medical_aid_number" value="' . $row['medical_aid_number'] . '"></td>';

        echo '<td><input type="text" class="form-control" name="diagnose_code" value="' . $row['diagnose_code'] . '"></td>';

        echo '<td><input type="text" class="form-control" name="patient_id" value="' . $row['patient_id'] . '"></td>';
    




        
        echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';

        echo '<input type="hidden" name="id" value="' . $row['id'] . '">';

        echo '</form>';
    } else {
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" .$row['surname'] . "</td>";
        echo "<td>" . $row['age'] . "</td>";
        echo "<td>" . $row['gender'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['password'] . "</td>";
        echo "<td>" . $row['phone_number'] . "</td>";
        echo "<td>" . $row['medical_aid_number'] . "</td>";
        echo "<td>" . $row['diagnose_code'] . "</td>";
        echo "<td>" . $row['patient_id'] . "</td>";

        // Update button 
        echo '<td><a class="btn btn-primary" href="patient.php?id=' . $row['id'] . '" role="button"> Update </a></td>';
    }

    echo '<td><a class="btn btn-danger" href="patient_delete.php?id=' . $row['id'] . '" role="button"> delete </a></td>';
    echo "</tr>";

}
;


// to close the connection
$conn->close();

?>