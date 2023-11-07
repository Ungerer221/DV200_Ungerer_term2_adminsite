<?php

// error_reporting(0); 

include 'db.php'; //should be db.php

$sql = "SELECT * FROM appointment_table";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "<tr>";

    if ($row['id'] == $_GET['id']) {
        echo '<form class="form-inline m-2" action="update.php" method="POST">';

        // name
        echo '<td><input type="text" class="form-control" name="doctorId" value="' . $row['doctorId'] . '"></td>';
        // surname
        echo '<td><input type="text" class="form-control" name="patientId" value="' . $row['patientId'] . '"></td>';
        // age 
        echo '<td><input type="number" class="form-control" name="room" value="' . $row['room'] . '"></td>';

        // gender 
        echo '<td><input type="date" class="form-control" name="date" value="' . $row['date'] . '"></td>';

        // email
        echo '<td><input type="time" class="form-control" name="time" value="' . $row['time'] . '"></td>';



        // better 
        echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
        echo '<input type="hidden" name="appointmentId" value="' . $row['appointmentId'] . '">';

        echo '</form>';
    } else {
        echo "<td>" . $row['doctorId'] . "</td>";
        echo "<td>" . $row['patientId'] . "</td>";
        echo "<td>" . $row['room'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "<td>" . $row['time'] . "</td>";

        // doctor changed to update 
        echo '<td><a class="btn btn-primary" href="update.php?id=' . $row['id'] . '" role="button"> Update </a></td>';
    }

    echo '<td><a class="btn btn-danger" href="appointment_delete.php?id=' . $row['id'] . '" role="button"> delete </a></td>';
    echo "</tr>";

}
;


// to close the connection
$conn->close();

?>