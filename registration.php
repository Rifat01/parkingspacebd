  <?php
include('conn_db.php');
if(isset($login_session))
{
header("Location: login.php");
}
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
$username = mysqli_real_escape_string($obj->conn,$_POST['username']);
$name = mysqli_real_escape_string($obj->conn,$_POST['name']);
$password = mysqli_real_escape_string($obj->conn,$_POST['password']);
$phone = mysqli_real_escape_string($obj->conn,$_POST['phone']);
$email = mysqli_real_escape_string($obj->conn,$_POST['email']);
$vehicleno = mysqli_real_escape_string($obj->conn,$_POST['vehicleno']);
$vehicletype = mysqli_real_escape_string($obj->conn,$_POST['vehicletype']);
$role = mysqli_real_escape_string($obj->conn,$_POST['role']);
$address = mysqli_real_escape_string($obj->conn,$_POST['address']);
//$password = md5($password);


    $nameErr = $usernameErr = $phoneErr = $emailErr = $passwordErr = $vehicletypeErr = $vehiclenoErr = $roleErr = $addressErr = "";
    

   if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["name"];
    trim($name);
    stripslashes($name);
    htmlspecialchars($name);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["username"])) {
    $usernameErr = "User Name is required";
  } if($_POST["username"] == "username"){
    $usernameErr =  "User Name already exists! TRY AGAIN!";
  } else {
    $username = $_POST["username"];
    trim($username);
    stripslashes($username);
    htmlspecialchars($username);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
      $usernameErr = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["phone"])) {
    $phoneErr = "Phone Number is required";
  } else {
    $phone = $_POST["phone"];
    trim($_POST["phone"]);
    stripslashes($phone);
    htmlspecialchars($phone);
    // check if number has only numbers
    if (preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $phone) && strlen($phone) != 11 ) {
      $phoneErr = "Only Numbers are allowed!"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

    if (empty($_POST["password"])) {
    $passwordErr = "password is required";
  }
    if (empty($_POST["role"]) or $_POST["role"] == "Role" ) {
    $roleErr = "Select your Role!";
  }
    if($_POST["role"] == "User" ){
        if (empty($_POST["vehicletype"]) or $_POST["vehicletype"] == "Select" ) {
            $vehicletypeErr = "vehicletype is required";
        }
        if (empty($_POST["vehicleno"])) {
            $vehiclenoErr = "Vehicle No is required";
        }
        $addressErr="Not Required.";
    }
    
    if($_POST["role"] == "Parking Owner" ){
        if (empty($_POST["address"])) {
    $addressErr = "Put Your Address.";
        }
        $vehicletypeErr = "Not Required.";
        $vehiclenoErr = "Not Required.";
    }
    
  


/*function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}*/


if($_POST['role'] == "Driver" ){
if( ($_POST['name'] && $_POST['username'] && $_POST['phone'] && $_POST['email'] && $_POST['password'] && $_POST['vehicleno'] && $_POST['vehicletype']) != NULL) {
    $sql = "INSERT INTO users(username,name,password,phone,email,vehicleno,vehicletype) VALUES ('$username', '$name', '$password', '$phone', '$email', '$vehicleno','$vehicletype')";
    $result = mysqli_query($obj->conn, $sql) /*or die(mysqli_error($sql)) */ ;
    echo "Registration Successfull!";
}else{
    echo "Registration Failed.";
}
}

if($_POST['role'] == "Parking Owner" ){
    if( ($_POST['name'] && $_POST['username'] && $_POST['phone'] && $_POST['email'] && $_POST['password'] && $_POST['address']) != NULL) {
    $sql2 = "INSERT INTO owners(username,name,password,phone,email,address) VALUES ('$username', '$name', '$password', '$phone', '$email', '$address')";
    $result = mysqli_query($obj->conn, $sql2) /*or die(mysqli_error($sql)) */ ;
    echo "Registration Successfull!";
}else{
    echo "Registration Failed.";
}
}





}
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
    <link rel="stylesheet" href="style123.css">
   

</head>
<body>
    <header>
        <!--------------------------------------------NAV BAR -------------------------------------------------->
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
                        <a class="nav-link fcolor1 dropdown-toggle active" href="#" id="navbardrop" data-toggle="dropdown">Registration</a>
                        <div class="dropdown-menu" style="margin-top:10px;">
                            <a class="dropdown-item" href="registration.php">As Driver</a>
                            <a class="dropdown-item" href="registration.php">As Space Owner</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="login.php"> <button type="button" class="btn btn-outline-success fcolor1" style="border-radius: 20px;">Login</button> </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container text-center">
        <h1 class="fcolor5">REGISTRATION</h1>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-md-6 mr-auto">
                <img src="../psb/images/register.png" class=" mx-auto d-block">
            </div>

            <div class="col-md-6 ml-auto">

        <form action="registration.php" method="POST">
            <form class="booking-form" name="registration"> 
                <div class="form-group">
                
                    <input id="your_name" class="form-control" placeholder="Name" type="text" name="name">
                    <span class="errorcolor"><?php global $nameErr; echo $nameErr; ?> </span>
                </div>
                <div class="form-group">
                
                    <input id="your_username" class="form-control" placeholder="User Name" type="text" name="username">
                    <span class="errorcolor"><?php global $usernameErr; echo $usernameErr; ?> </span>
                </div>
                 <div class="form-group">
            
                    <input id="your_phone" class="form-control" placeholder="Phone" type="text" name="phone">
                    <span class="errorcolor"><?php global $phoneErr; echo $phoneErr; ?> </span>
                </div>
                <div class="form-group">
                 
                    <input id="your_email" class="form-control" placeholder="Email" type="email" name="email">
                    <span class="errorcolor"><?php global $emailErr; echo $emailErr; ?> </span>
                </div>
                <div class="form-group">
                
                    <input id="your_password" class="form-control" placeholder="password" type="password" name="password">
                    <span class="errorcolor"><?php global $passwordErr; echo $passwordErr; ?> </span>
                </div>

                    <div class="form-group"> 
                                                        
                        <select class="form-control" placeholder="Role" name="role">
                             Role:<br>
                            <option>Role</option>
                            <option>Driver</option>
                            <option>Parking Owner</option>
                        </select>
                        <span class="errorcolor"><?php global $roleErr; echo $roleErr; ?> </span>
                    </div>
                
                <div class="form-group">
                 Vehicle Type:<br>
                    <div class="select-style"> 
                                                        
                        <select class="form-control" placeholder="Vehicle Type" name="vehicletype">
                            <p>Vehicle Type </p>
                            <option>Select</option>
                            <option>Bike</option>
                            <option>Car</option>
                            <option>Micro-Bus</option>
                            <option>Mini-Truck</option>
                            
                        </select>
                        <span class="errorcolor"><?php global $vehicletypeErr; echo $vehicletypeErr; ?> </span>
                    </div>
                </div>
                <div class="form-group">
                 Vehicle Number:<br>
                    <input id="your_vehicle number" class="form-control" placeholder="Vehicle Number" type="text" name="vehicleno">
                    <span class="errorcolor"><?php global $vehiclenoErr; echo $vehiclenoErr; ?> </span>
                </div>

                <div class="form-group">
                
                    <input id="your_address" class="form-control" placeholder="Address" type="text" name="address">
                    <span class="errorcolor"><?php global $addressErr; echo $addressErr; ?> </span>
                </div>

                


                <div class="form-group text-center">
                    <button id="btn_submit" class="btn btn-outline-success fcolor2" type="submit" name="submit">Register</button>
                </div>

            </form> 
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