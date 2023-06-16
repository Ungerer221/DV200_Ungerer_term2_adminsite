<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- css  -->
    <link rel="stylesheet" href="main.css">

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
            <button id="login-btn">login</button>
            <button id="signup-btn">sign up</button>
            <button class="profile-btn"></button>
        </div>
    </div>
    <!-- -----------------end------------------ -->

    <!-- next appointment container  -->
    <div class="main-container">

        <h1>receptionist page</h1>

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
            <h2>september 2023</h2>
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

                <div class="patient-tile-navbar">
                    <button>today</button>
                    <button>week</button>
                    <button>month</button>
                </div>

                <!-- patient tile  -->
                <!-- <div class="patient-tile">
                    <img src="images\profile icon.svg" alt="">
                    <h3>name here</h3>
                    <div class="tile-contact-info">
                        <p>098 756 2344</p>
                        <p>john@example.com</p>
                    </div>
                    <p>23 september 2023</p>
                </div> -->
                <!-- -----------------end------------------ -->


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