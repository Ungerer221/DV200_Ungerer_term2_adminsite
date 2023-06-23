<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- css  -->
    <link rel="stylesheet" href="main.css">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body>

    <!-- navbar  -->
    <div id="navbar">
        <!-- icon and title block  -->
        <div class="title-con">
            <!-- logo image  -->
            <div class="logo">
                <img src="" alt="">
            </div>
            <!-- title  -->
            <div class="sitename">
                <h1>Recep Pro</h1>
            </div>
        </div>

        <!-- nav list  -->
        <div>
            <ul>
                <a href="main.php">
                    <li>home</li>
                </a>
                <a href="doctor.php">
                    <li>doctor</li>
                </a>
                <a href="patient.php">
                    <li>patient</li>
                </a>
            </ul>
        </div>
        <!-- buttons block -->

        <div class="nav-button-con">
            <!-- <button id="login" onclick="login()"> login </button> -->

            <button> <a href="index.php">Logout</a></button>

            <button id="signup-btn"><a href="./loginSystem/index.php">sign</a></button>

            <button class="profile-btn"></button>
        </div>
    </div>
    <!-- -----------------end------------------ -->

    <!-- next appointment container  -->
    <div class="main-container">

        <h1>receptionist page</h1>

        <!-- <button id="test" onclick="test()">test</button> -->

        <!-- date and time widget  -->
        <div class="current-date-con">
            <!-- current date  -->
            <div class="currDay">
                <?php
                echo date("d") . "<br>";
                ?>
            </div>
            <!-- current time  -->
            <div class="currTime">
                <?php
                echo date("h:i a") . "<br>";
                ?>
            </div>
            <!-- month and year  -->
            <div class="currMonthYear">
                <?php
                echo date("m y") . "<br>";
                echo "Today is " . date("l");
                ?>
            </div>
            <!-- <div class="profile-display"></div> -->
        </div>
        <!-- -----------------end------------------ -->

        <!-- include a feature that saos how many days till next appointment  -->

        <div class="up-next-con">

            <h1>upcoming appointments</h1>

            <!-- patient tile container  -->
            <div class="patient-tile-con">

                <!-- filters -->
                <div class="patient-tile-navbar">
                    <!-- <button>today</button>
                    <button>week</button>
                    <button>month</button> -->
                </div>


                <!-- started -->

                <table class="appointments-table">
                    <thead>
                        <tr>
                            <th>Doctor</th>
                            <th>Patient</th>
                            <th>Room</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        // data base
                        $host = 'localhost';
                        $username = 'root';
                        $password = '';
                        $database = 'adminwebsite';

                        $conn = new mysqli($host, $username, $password, $database);

                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        // read
                        $sql = "SELECT * FROM appointment_table";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<tr>';
                                echo '<td>' . $row['doctorId'] . '</td>';
                                echo '<td>' . $row['patientId'] . '</td>';
                                echo '<td>' . $row['room'] . '</td>';
                                echo '<td>' . $row['date'] . '</td>';
                                echo '<td>' . $row['time'] . '</td>';
                                // echo '<td>' . $row['edit'] . '</td>';
                        
                                echo '<td>';
                                echo '<a class="btn btn-primary" href="update.php?id=' . $row['doctorId'] . '">Edit</a> | ';
                                echo '<a class="btn btn-primary" href="appointment_delete.php?delete=' . $row['appointmentId'] . '">Delete</a>';
                                echo '</td>';
                                echo '</tr>';

                                // echo '<td><a class="btn btn-danger" href="doctorDelete.php?id=' . $row['id'] . '" role="button"> delete </a></td>';
                        
                            }
                        } else {
                            // If no rows are returned, display a message
                            echo '<tr><td colspan="9">No doctors found.</td></tr>';
                        }

                        $conn->close();
                        ?>

                    </tbody>
                    <!-- -----------------end------------------ -->

                    <form class="Add" action="createappointment.php" method="POST">
                        <label for="Patient">Patient:</label>
                        <?php
                        include 'patient_dropdown.php';
                        ?>

                        <label for="Doctor">Doctor:</label>
                        <?php
                        include 'doctor_dropdown.php';
                        ?>
                        <label for="Room">Room:</label>
                        <?php
                        include 'room_dropdown.php';
                        ?>
                        <label for="date">Date:</label>
                        <!-- <input type="dd/mm/yyy" class="form-control m-2" id="date" name="date"> -->
                        <input type="date" class="form-control m-2" id="date" name="date">

                        <label for="time">Time:</label>
                        <!-- <input type="hh:mm" class="form-control m-2" id="time" name="time"> -->
                        <input type="time" class="form-control m-2" id="time" name="time">

                        <button type="submit" class="btn btn-primary">Add</button>
                    </form><br>


                    <!-- php stuff here to add  -->

                    <table class="table">
                        <tbody>
                            <?php
                            // include 'read.php'
                            ?>
                        </tbody>
                    </table>

            </div>
        </div>

    </div>
    <!-- -----------------end------------------ -->

    <!-- footer -->
    <div class="footer-con">

        <!-- row 1 -->
        <div class="footer-row-1">
            <div class="footer-icon">
                <img src="images\leaf icon.png" alt="">
            </div>
            <div class="footer-title">Recep Pro</div>
        </div>
        <!-- -----------------end------------------ -->

        <!-- row 2 -->
        <div class="footer-row-2">
            <!-- column 1 -->
            <div class="footer-column-1">
                <ul>
                    <a href="">
                        <li>link</li>
                    </a>
                    <a href="">
                        <li>link</li>
                    </a>
                    <a href="">
                        <li>link</li>
                    </a>
                </ul>
            </div>
            <!-- coloumn 2 -->
            <div class="footer-column-2">
                <ul>
                    <a href="">
                        <li>link</li>
                    </a>
                    <a href="">
                        <li>link</li>
                    </a>
                    <a href="">
                        <li>link</li>
                    </a>
                </ul>
            </div>
            <!-- column 3 -->
            <div class="footer-column-3">
                <ul>
                    <a href="">
                        <li>link</li>
                    </a>
                    <a href="">
                        <li>link</li>
                    </a>
                    <a href="">
                        <li>link</li>
                    </a>
                </ul>
            </div>
            <div class="footer-column-4">
                <div class="footer-email-input">
                    <label for="email">email</label>
                    <input name="email" type="email" placeholder="email here">
                </div>
                <div class="footer-social-btn">
                    <div class="footer-twitter-btn"></div>
                    <div class="footer-insta-btn"></div>
                    <div class="footer-facebook-btn"></div>
                    <div class="footer-youtube-btn"></div>
                </div>
            </div>
        </div>
        <!-- -----------------end------------------ -->

    </div>
    <!-- -----------------end------------------ -->

    <script src="main.js"></script>
</body>

</html>