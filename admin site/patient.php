<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- css  -->
    <link rel="stylesheet" href="patient.css">

    <!-- font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">


    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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


    <div class="container">

        <!-- table to show the results  -->
        <!-- add button that delets and one that edits  -->
        <table class="table">
            <tbody>
                <?php
                include 'patient_read.php';
                ?>
            </tbody>
        </table>

        <!-- The action in the form element sh -->
        <form class="form-inline m-2" action="patient_create.php" method="POST">
            <!-- name  -->
            <label for="name">Name:</label>
            <input type="text" class="form-control m-2" id="name" name="name">
            <!-- surname  -->
            <label for="surname">Surname:</label>
            <input type="text" class="form-control m-2" id="surname" name="surname">
            <!-- age  -->
            <label for="age">age:</label>
            <input type="number" class="form-control m-2" id="age" name="age">
            <!-- gender  -->
            <label for="gender">Gender:</label>
            <input type="text" class="form-control m-2" id="gender" name="gender">
            <!-- email  -->
            <label for="email">Email:</label>
            <input type="email" class="form-control m-2" id="email" name="email">
            <!-- password  -->
            <label for="password">Password:</label>
            <input type="text" class="form-control m-2" id="password" name="password">
            <!-- phone number  -->
            <label for="phone_number">Phone number:</label>
            <input type="text" class="form-control m-2" id="phone_number" name="phone_number">
            <!-- medical aid number  -->
            <label for="medical_aid_number">medical aid number:</label>
            <input type="text" class="form-control m-2" id="medical_aid_number" name="medical_aid_number">
            <!-- diagnose code  -->
            <label for="diagnose_code">Diagnose code:</label>
            <input type="text" class="form-control m-2" id="diagnose_code" name="diagnose_code">
            <!-- patient id  -->
            <label for="patient_id">Patient ID:</label>
            <input type="text" class="form-control m-2" id="patient_id" name="patient_id">


            <button type="submit" class="btn btn-primary patient">Add</button>
        </form>

        <!-- create a drop down menu that shows the list of names  -->
        <!-- <form>
            <?php
            // include 'dropdown.php'
            ?>

        </form> -->

    </div>


    <script src="main.js"></script>
</body>

</html>