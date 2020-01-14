
<?php
include('conn_db.php');
$Send='';
$Send1='';
if(isset($_POST['Submit'])){
  
      include('conn_db.php');
      $user_id=$_SESSION['user_id'];      
      $name =  $_POST['name'];
      $phone =  $_POST['phone'];
      $city =  $_POST['city'];
      $area =  $_POST['area'];
      $block =  $_POST['block'];
      $road =  $_POST['road'];
      $house =  $_POST['house'];
      $time_from =  $_POST['time_from'];
      $time_to =  $_POST['time_to'];
      $cost =  $_POST['cost'];

      
          $sql5 = "INSERT INTO `parking_slot`(`user_id`,`name`,`phone`,`city`,`area`,`block`,`road`,`house`,`time_from`,`time_to`,`cost`) VALUES ('$user_id','$name','$phone','$city','$area','$block','$road','$house','$time_from','$time_to','$cost')";
          if ($conn->query($sql5) == TRUE) {
          
            $Send="Post Successful!";
            } 
        else {
                     $Send1="Post Unsuccessful! <br> Something wrong with your input. ";
            }
            
      }
    


      

      

   


?> 
<!DOCTYPE html>
<html>
<head>
    <title>Post Parking Slot</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>


<div style="padding: 20px; background-color: gray; margin: 20px; border-radius: 10px;">
    <a style="float: right;" href="logout.php">Logout</a>
    <a style="float: left; color: green;" href="reservation.php">Reservation</a>




<form action="post-parking-slot.php" method="POST">
    <center><p style="color: green"><b><?php echo $Send;   ?></b></p></center>
    <center><p style="color: red"><b><?php echo $Send1;   ?></b></p></center>

  <div class="form-row">

    <div class="form-group col-md-6">
      <label>Name</label>
      <input type="text" name="name" class="form-control" placeholder="Contact Person's Name" required>
    </div>
    <div class="form-group col-md-6">
      <label>Phone Number</label>
      <input type="phone" name="phone" class="form-control" placeholder="Contact Number" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputCity">City</label>
      <input type="text" name="city" class="form-control" placeholder="Example:Dhaka">
    </div>
    <div class="form-group col-md-3">
      <label for="inputCity">Area</label>
      <input type="text" name="area" class="form-control" placeholder="Example:Bashundhara R/A">
    </div>
    <div class="form-group col-md-3">
      <label for="inputCity">Block (Optional)</label>
      <input type="text" name="block" class="form-control" placeholder="Example:D">
    </div>
    <div class="form-group col-md-3">
      <label for="inputCity">Road No (Optional)</label>
      <input type="text" name="road" class="form-control" placeholder="Example:4">
    </div>
    <div class="form-group col-md-3">
      <label for="inputCity">House No</label>
      <input type="text" name="house" class="form-control" required placeholder="Example:51/L">
    </div>
    
    <div class="form-group col-md-3">
      <label for="inputZip">Time (From)</label>
      <input type="time" name="time_from" class="form-control" placeholder="Free time" required>
    </div>
    <div class="form-group col-md-3">
      <label for="inputZip">Time (To)</label>
      <input type="time" name="time_to" class="form-control" placeholder="Free time" required>
    </div>
    <div class="form-group col-md-3">
      <label for="inputZip">Per Hour Charge (Taka)</label>
      <input type="Number" name="cost" class="form-control" placeholder="Example:50" required>
    </div>
  </div>
  <center><button type="submit" name="Submit" class="btn btn-primary">Submit</button></center>


</form>
</div>



</body>
</html>