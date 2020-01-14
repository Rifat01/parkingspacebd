<?php
include('conn_db.php');
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
/* username and password sent from Form
$emailusername = mysqli_real_escape_string($obj->conn,$_POST['emailusername']); 
$emailusername2 = mysqli_real_escape_string($obj->conn,$_POST['emailusername2']); */

$username = mysqli_real_escape_string($obj->conn,$_POST['username']);
$password = mysqli_real_escape_string($obj->conn,$_POST['password']);

//$password = md5($password);

$sql="SELECT id FROM users WHERE username='$username'  and password='$password'";
$sql2="SELECT id FROM owners WHERE username='$username'  and password='$password'";

$result=mysqli_query($obj->conn,$sql);
$result2=mysqli_query($obj->conn,$sql2);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);

$active=$row['active'];
$count=mysqli_num_rows($result);

$active2=$row['active2'];
$count2=mysqli_num_rows($result2);


// If result matched $username and $username, table row must be 1 row
$error='';
if($count==1)
{
$_SESSION['login_user'] = $emailusername;
header("location: search.php");
}
else 
{
$error="Your Login Name or Password is invalid";
}

if($count2==1)
{
$_SESSION['login_user'] = $emailusername2;
header("location: search.php");
}
else 
{
$error="Your Login Name or Password is invalid";
}

   }
//forget password
/*if(isset($_POST) & !empty($_POST)){
    $username = mysqli_real_escape_string($obj->conn, $_POST['username']);
    $sql4 = "SELECT * FROM users WHERE username = '$username'";
    $res = mysqli_query($obj->conn, $sql4);
    $count = mysqli_num_rows($res);
    if($count == 1){
        echo "Send email to user with password";
    }else{
        echo "User name does not exist in database";
    }
$r = mysqli_fetch_assoc($res);
$password1 = $r['password'];
$to = $r['email'];
$subject = "Your Recovered Password";

$message = "Please use this password to login " . $password1;
//$headers = "From : muhabullah@northsouth.edu". "\r\n";

$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers = 'From: muhabullah@northsouth.edu' . "\r\n";
$headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

if(mail($to, $subject, $message, $headers)){
    echo "Your Password has been sent to your email id";
}else{
    echo "Failed to Recover your password, try again";
}   
}*/
/*
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'sifat01552@gmail.com';                 // SMTP username
    $mail->Password   = 'monipurhighschool';                    // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('sifat01552@gmail.com', 'Your Password');
    $mail->addAddress($email, $email);     // Add a recipient


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'PSB Password';
    $mail->Body    = 'Hi, Here is your Password for this ID in <b>Parking Sapce Bangladesh</b>';
    $mail->AltBody = 'Hi, Here is your Password for this ID in Parking Sapce Bangladesh';

    $mail->send();
    echo 'Email has been sent';
} catch (Exception $e) {
    echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
}*/


?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Parking Space Bangladesh">
    <meta name="author" content="Rifat">
    <link rel="shortcut icon" href="../psb/images/car.png">
    <title>Parking Space Bangladesh</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link href="../psb/css/home.css"   rel="stylesheet" type="text/css"/>
    <script src="../psb/css/contact.js"></script>

   

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top top-bar2 clearfix">
            <a class="navbar-brand image" href="home.php">
                <img src="../psb/images/logo1.jpg" alt="logo" style="width:100px;">
            </a>

            <!-- Toggler Button -->
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link fcolor1" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fcolor1" href="about.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fcolor1" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link fcolor1 dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown">Registration</a>
                        <div class="dropdown-menu" style="margin-top:10px;">
                            <a class="dropdown-item" href="registration.php">As Driver</a>
                            <a class="dropdown-item" href="registration.php">As Space Owner</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="login.php"> <button type="button" class="btn btn-outline-success fcolor1 active" style="border-radius: 20px;">Login</button> </a>
                    </li><br>
                </ul>
            </div>
        </nav>
    </header>


    <div class="container-fluid">
        <div class="row bglogin">
            <div class="col-md-4 mx-auto d-block text-center">
                <div class="divcolor">
                    <img src="../psb/images/login1.png" style="height: 20%;width: 20%;">
                    <h1 class="fcolor5">Sign In</h1>

                    <form action="search.php" method="POST">
                        <form name="login">
                            <div class="form-group col-md-6 mx-auto d d-block">
                                <input id="your_username" class="form-control" placeholder="User Name" type="username" name="username">
                                <? global $error; echo $error; ?>
                            </div>
                            <div class="form-group col-md-6 mx-auto d d-block">
                                <input id="your_password" class="form-control" placeholder="password" type="password" name="password">
                                <? global $error; echo $error; ?>
                            </div>
                            <div class="form-group col-md-6 mx-auto d d-block">
                                <select class="form-control" placeholder="Role" name="role">
                                    Role:<br>
                                    <option>Role</option>
                                    <option>Driver</option>
                                    <option>Parking Owner</option>
                                    <option>Admin</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 mx-auto d d-block">
                                <button id="btn_submit" class="btn btn-success btn-block fcolor1" type="submit" name="submit">login</button>
                                <button class="btn btn-outline-warning btn-block" type="submit">Forgot Password</button>
                            </div>
                        </form>
                    </form>

                </div>
            </div>
        </div>
    </div>
        
    

    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 back123">
                   <h2 class="text-success margin123">Parking Space Bangladesh</h2> 
                </div>
                <div class="col-md-4 back123">
                    <br><p class="text-secondary">About<br>How it Works<br>Contact Us<br>User Guideline</p>
                </div>
                <div class="col-md-4 back123">
                    <br><a href="home.php" class="text-secondary" style="text-decoration: none;">Home</a><br>
                    <a href="registration.php" class="text-secondary" style="text-decoration: none;">Register</a><br>
                    <a href="login.html" class="text-secondary" style="text-decoration: none;">Sign In</a><br>
                    <a href="#" class="text-secondary" style="text-decoration: none;">Search</a><br><br>
                    <h4 class=" text-secondary">Stay in touch</h4><br>
                    <ul class="row" style="text-align: center">
                        <h2><a class="fab fa-facebook back124" style="text-decoration: none;" href="#"></a></h2>
                        <h2><a class="fab fa-facebook-messenger back124" style="text-decoration: none;" href="#"></a></h2>
                        <h2><a class="fab fa-twitter back124" style="text-decoration: none;" href="#"></a></h2>
                        <h2><a class="fab fa-youtube back124" style="text-decoration: none;" href="#"></a></h2>
                    </ul>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-sm back123 navbar-dark">
            <div class="col-md-6 back124 mx-auto d-block">
                <i class="far fa-copyright float-left" style="margin-top: 1%;">Copyright PSB 2019</i>
            </div>
            <div class="col-md-4 float-right">
                <i class="fas fa-phone back124"> Cell: (+880)1631179490</i><br>
                <i class="far fa-envelope back124"> Email: muhabullah@northsouth.edu</i>
            </div>
        </nav>        
    </footer>






</body>
</html>
