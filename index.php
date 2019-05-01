<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icon.png" type="image/png">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Habit tracker</title>
    <link rel="stylesheet" href="main.css"/>
    <link href="https://fonts.googleapis.com/css?family=Wendy+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
    

    <header>
        <img src="images/icon.png" alt=""/>
        <ul>
            <li id="li_home">Home</li>
            <li id="li_about">About</li>
            <li id="li_tracker">Tracker</li>
            <li id="li_contact">Contact</li>
        </ul>
        <a href="login.php"><i class="fas fa-user-alt"></i></a>
    </header>

    <div class="main">
        <h1>Your Habits <br>Define Your Life!</h1>
        <!-- <img id="img_1" src="images/img1.jpg" alt=""/> -->
        <img id="img_3" src="images/img3.jpeg" alt=""/>
        <img id="img_4" src="images/img4.jpg" alt=""/>
        <img id="img_2" src="images/img2.jpg" alt=""/>

        <div class="scroll-downs">
            <div class="mousey">
                <div class="scroller"></div>
            </div>
        </div>
    </div>

    <div class="about">
        <h2>The Habit Tracker: What It Is and How It Works</h2>
        <div id="content">
            <p>
                A habit tracker is a simple way to measure whether you did a habit.
                The most basic format is to get a calendar and cross off each day you stick with your routine. 
                For example, if you meditate on Monday, Wednesday, and Friday, each of those dates gets an X. 
                As time rolls by, the calendar becomes a record of your habit streak.
                To make this process as easy as possible, We created out virtual habit tracker. 
                All you have to do is add your habit and start crossing off the days.<br>
                Habit tracking is powerful for three reasons:
                <ul>
                    <li>It creates a visual cue that can remind you to act.</li>  
                    <li>It is motivating to see the progress you are making. You don't want to break your streak.</li>   
                    <li>It feels satisfying to record your success in the moment.</li>           
                </ul>
                Let's break down each one.
            </p>
        </div>
        <div id="about_img">
            <img src="images/icon.png" alt=""/>
        </div>
    </div>

    <div class="tracker">
        <p>Are you ready to educate a new habit?</p>
        <div class="contact-fp-wrap">
            <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <linearGradient id="logo-gradient" x1="50%" y1="0%" x2="75%" y2="100%" >  
                    <stop offset="0%" stop-color="#F79533">
                        <animate attributeName="stop-color" values="#F79533; #F37055; #EF4E7B; #A166AB; #5073B8; #1098AD; #07B39B; #6DBA82; #F79533" dur="4s" repeatCount="indefinite"></animate>
                    </stop>
                    <stop offset="100%" stop-color="#F79533">
                        <animate attributeName="stop-color" values="#F37055; #EF4E7B; #A166AB; #5073B8; #1098AD; #07B39B; #6DBA82; #F79533; #F37055" dur="4s" repeatCount="indefinite"></animate>
                    </stop>
                </linearGradient> 
            </defs>
            <rect class="booton" height="60" width="320" />
            </svg>
            <div class="booton-text"><a href="login.php" style="color:rgba(17, 21, 22, 0.884)">Let's get started!</a></div>
        </div>

        <img id="tracker--img--1" src="images/watch.png" alt=""/>
        <img id="tracker--img--2" src="images/apple.png" alt=""/>
        <img id="tracker--img--3" src="images/settings.png" alt=""/>
        <img id="tracker--img--4" src="images/man.png" alt=""/>
    </div>

    <footer>
        <img src="images/icon.png" alt=""/>
        <ul id="first--list">
            Get started
            <li><a>Home</a></li>
            <li><a>Sign up</a></li>
            <li><a>Download</a></li>
        </ul>
        <ul id="second--list">
            About us
            <li><a>Information</a></li>
            <li><a>Contact us</a></li>
        </ul>
        <ul id="third--list">
            Support
            <li><a>Help</a></li>
        </ul>
        <div id="icons">
                <a href="" target="_blank"><span><i title="Facebook" class="fab fa-facebook-f"></i></span></a>
                <a href="" target="_blank"><span><i title="Instagram" class="fab fa-instagram"></i></span></a>
                <a href=""><span><i title="Google plus" class="fab fa-google-plus-g"></i></span></a>
        </div>
        <button>Contact us</button>
        <div id="copyright--block"> Copyright © Habit trackers 2019  All rights reserved</div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="mainJS.js"></script>
</body>
</html>