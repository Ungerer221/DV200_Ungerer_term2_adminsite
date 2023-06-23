<?php

// error_reporting(0); 

include 'db.php'; //should be db.php

$sql = "SELECT * FROM doctor_table";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "<tr>";

    if ($row['id'] == $_GET['id']) {
        echo '<form class="form-inline m-2" action="doctor_update.php" method="POST">';

        // name
        echo '<td><input type="text" class="form-control" name="name" value="' . $row['name'] . '"></td>';
        // surname
        echo '<td><input type="text" class="form-control" name="surname" value="' . $row['surname'] . '"></td>';
        // age 
        echo '<td><input type="number" class="form-control" name="age" value="' . $row['age'] . '"></td>';

        // gender 
        echo '<td><input type="text" class="form-control" name="gender" value="' . $row['gender'] . '"></td>';

        // email
        echo '<td><input type="text" class="form-control" name="email" value="' . $row['email'] . '"></td>';

        // password
        echo '<td><input type="text" class="form-control" name="password" value="' . $row['password'] . '"></td>';

        // phone number
        echo '<td><input type="text" class="form-control" name="phone_number" value="' . $row['phone_number'] . '"></td>';

        // specialisation
        echo '<td><input type="text" class="form-control" name="specialisation" value="' . $row['specialisation'] . '"></td>';



        // better 
        echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
        echo '<input type="hidden" name="id" value="' . $row['id'] . '">';

        echo '</form>';
    } else {
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['surname'] . "</td>";
        echo "<td>" . $row['age'] . "</td>";
        echo "<td>" . $row['gender'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['password'] . "</td>";
        echo "<td>" . $row['phone_number'] . "</td>";
        echo "<td>" . $row['specialisation'] . "</td>";



        echo '<td><a class="btn btn-primary" href="doctor.php?id=' . $row['id'] . '" role="button"> Update </a></td>';
    }

    echo '<td><a class="btn btn-danger" href="doctorDelete.php?id=' . $row['id'] . '" role="button"> delete </a></td>';
    echo "</tr>";

}
;


// to close the connection
$conn->close();

?>