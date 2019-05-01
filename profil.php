<?php
    include('dbcon.php');
    
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
if (isset($_COOKIE['id']) and isset($_COOKIE['hash']))
{
    //$query = mysqli_query($db, "SELECT *,INET_NTOA(user_ip) AS user_ip FROM users WHERE user_id = '".intval($_COOKIE['id'])."' LIMIT 1");
   // $userdata = mysqli_fetch_assoc($query);
$query =  $DB->query("SELECT id FROM users WHERE id =?", array($_COOKIE['id']));
    if($query[0]['id'] !== $_COOKIE['id'])
    {
        setcookie("id", "", time() - 3600*24*30*12, "/");
        setcookie("hash", "", time() - 3600*24*30*12, "/");
        print "Хм, что-то не получилось";
    }
    else
    {
$user_ids = $query[0]['id'];
      if(isset($_POST['name']) AND isset($_POST['from']) AND isset($_POST['to'])){
      $name = $_POST['name'];
      $from = $_POST['from'];
      $to = $_POST['to'];


      $check = $DB->query("SELECT COUNT(*) FROM `track` WHERE user_id =? AND name=?", array($user_ids,$name));

        if($check[0]['COUNT(*)'] == 0){
                              $pieces1 = explode("/", $from);
              $pieces2 = explode("/", $to);

              $from = $pieces1[1].'-'.$pieces1[0].'-'.$pieces1[2];

              $to = $pieces2[1].'-'.$pieces2[0].'-'.$pieces2[2];

      $DB->query("INSERT INTO `track` (`id`, `user_id`, `name`, `fromT`, `toT`) VALUES (NULL, ?, ?, ?, ?)", array($user_ids,$name,$from,$to));
        }


      }


$track =  $DB->query("SELECT * FROM `track` WHERE user_id =?", array($user_ids));



    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="tracker.css"/>
    <link rel="stylesheet" href="datedropper.css"/>
    <link rel="stylesheet" href="my-style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Wendy+One" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<body>
    
    <header>
        <div>
            <h2>Choose a habit and the length of time during which you want to develop this habit.<span></span></h2>
            <div id="inputs--block">
              <form method="POST">
                <input name="name" id="input--name" type="text" placeholder="Habit's name"/>
                <input name="from" id="input--from" type="text" data-large-mode="true" data-lock="from" data-translate-mode="true"/>
                <input name="to" id="input--to" type="text" data-large-mode="true" data-lock="from" data-translate-mode="true"/>
                <button> <input value="submit" type="submit"></button>
              </form>
            </div>
        </div>
    </header>
    <section>
        <table>
            <tr>
                <th>Habit's name</th>
                <th>From</th>
                <th>To</th>
                <th>Days</th>
            </tr>
            <?php
            foreach ($track as $key => $value) {
             // print_r($value);
            $froms = $value['fromT'];
            $tos = $value['toT'];
            
            $datetime1 = strtotime($froms);
            $datetime2 = strtotime($tos);

                $secs = $datetime2 - $datetime1;// == <seconds between the two times>
                $days = floor($secs / (24 * 60 * 60 )); ;
            ?>
            <tr>
                <th><?php echo $value['name'] ?></th>
                <th><?php echo $value['fromT'] ?></th>
                <th><?php echo $value['toT'] ?></th>
                <th><?php echo $days ?></th>
            </tr>
            <?php
          }
          ?>
        </table>
    </section>

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
    <script src="https://www.facebook.com/connect.php/js/FB.Share" type="text/javascript"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="datedropper.js"></script>
    <script src="tracker.js"></script>
</body>
</html>
<?php
    }}
?>