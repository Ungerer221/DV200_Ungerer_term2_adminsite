<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- css  -->
    <link rel="stylesheet" href="doctor.css">

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
            <button id="login-btn">login</button>
            <button id="signup-btn">sign up</button>
            <button class="profile-btn"></button>
        </div>
    </div>
    <!-- -----------------end------------------ -->


    <table class="table">
            <tbody>
                <?php
                include 'doctor_read.php';
                ?>
            </tbody>
        </table>

        <form class="form-inline m-2" action="create.php" method="POST">

            <!-- <label for="idnumber">ID Number:</label>
            <input type="text" class="form-control m-1" id="idnumber" name="idnumber"> -->

            <label for="name">Name:</label>
            <input type="text" class="form-control m-1" id="name" name="name">
            
            <label for="surname">Surname:</label>
            <input type="text" class="form-control m-1" id="surname" name="surname">

            <!-- <label for="date_of_birth">date_of_birth:</label> -->
            <!-- <input type="text" class="form-control m-1" id="dateofbirth" name="date_of_birth"> -->

            <!-- <label for="dateofbirth">Birthday:</label>
            <input type="date" id="dateofbirth" name="dateofbirth"> -->

            <label for="age">age:</label>
            <input type="number" class="form-control m-1" id="age" name="age">

            <label for="gender">gender:</label>
            <input type="text" class="form-control m-1" id="gender" name="gender">

            <label for="email">email:</label>
            <input type="email" class="form-control m-1" id="email" name="email">

            <label for="password">password:</label>
            <input type="text" class="form-control m-1" id="password" name="password">

            <label for="phone_number">phone number:</label>
            <input type="number" class="form-control m-1" id="phone_number" name="phone_number">

            <label for="specialisation">specialisation:</label>
            <input type="text" class="form-control m-1" id="specialisation" name="specialisation">

            <!-- <select name="gender" id="gender">
                <option value="male"></option>
                <option value="female"></option>
                <option value="other"></option>
            </select> -->

            <!-- <label for="race">race:</label>
            <input type="text" class="form-control m-1" id="race" name="race"> -->

            <img src="img/<?php echo $picture ?>" alt="">

            <button type="submit" class="btn btn-primary doctor">Add</button>
        </form>

        <!-- -----------------end------------------ -->


    <script src="main.js"></script>
</body>

</html>