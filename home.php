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
                        <a class="nav-link fcolor1 active" href="home.php">Home</a>
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
                        <a href="login.php"> <button type="button" class="btn btn-outline-success fcolor1 " style="border-radius: 20px;">Login</button> </a>
                    </li><br>
                </ul>
            </div>
        </nav>

    	<!------------------------------------------------------------SLIDER----------------------------------------------------------->
    	<section id="">
    		<div id="demo" class="carousel slide carousel-fade" data-ride="carousel">
    			<!-- Indicators -->
    			<ul class="carousel-indicators">
    				<li data-target="#demo" data-slide-to="0" class="active"></li>
    				<li data-target="#demo" data-slide-to="1"></li>
    			</ul>
    			
    			
    			<!----------------------------------------------- The slideshow Images ------------------------------------------------>
    			<div class="carousel-inner">
    				<div class="carousel-item active">
    					<img src="images/image2.jpg" class="mx-auto d-block img-fluid rounded" style="width: 100%; height: 100vh;overflow: auto;">
    					<div class="carousel-caption">
    						<a class="btn btn-outline-success fcolor1" href="registration.php" style="text-decoration: none;border-radius: 30px;"><h4> Register </h4></a><br><br><br>
    						<h2 class="fcolor2"> Park Your Car Anytime, Anywhere</h2>
    					</div>
    				</div>
    				<div class="carousel-item">
    					<img src="../psb/images/image3.jpg" class="mx-auto d-block img-fluid rounded" style="width: 100%; height: 100vh;overflow: auto;">
    					<div class="carousel-caption">
    						<h2 class="fcolor2"> Save Time<br>Increase Your Profit<br>Decrease Traffic Jam</h2>
    					</div>
    				</div>


        			
                    <!--<div class="carousel-caption">
        				<div class="row row-full-heigth align-items-center">
        					<div class="col-sm-2"></div>
        					<div class="col">
        						<form class="search123 form-inline">
        							<input type="text" class="form-control" placeholder="Search Area For Parking" required="required" name="search" autocomplete="off">
        							<button class="btn btn-danger fcolor5" type="submit"><h4>Search</h4></button>
        						</form>
        					</div>
        					<div class="col-sm-2"></div>
        				</div>
        			</div>-->
                    <div class="carousel-caption caption123">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8 mx-auto d-block text-center">
                                    <div class="divcolor1">
                                        <h1 class="fcolor5">SEARCH</h1>

                                        <form action="search.php" method="POST">
                                            <form name="search">
                                                <div class="form-group form-inline mx-auto d-block">
                                                    <button class="btn btn-success btn-block" type="submit">SEARCH Your Area For Parking</button>
                                                </div>                                               
                                            </form>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


    			<!--------------------------------------- Left and right controls ----------------------------------->
    			<a class="carousel-control-prev" href="#demo" data-slide="prev">
    				<span class="carousel-control-prev-icon"></span>
    			</a>
    			<a class="carousel-control-next" href="#demo" data-slide="next">
    				<span class="carousel-control-next-icon"></span>
    			</a>
    		</div>
    	</section>
    

    <!---------------------------------------------------------------WHAT WE DO ------------------------------------------>
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-md-12 text-center">
    			<h1 class="fcolor3">WHAT WE DO</h1>
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-md-6 text-center">
    			<img src="../psb/images/service.gif" class="image123 mx-auto d-block">
    			<br><h3 class="text-info">Our Service</h3><br>
                <p>Our technology enables our customers to find nearby parking spaces quickly and easily.
    		    <br>Our management will save your time regarding parking.</p>    			
    		</div>
    		<div class="col-md-6 text-center">
    			<img src="../psb/images/payment.gif" class="image123 mx-auto d-block">
    			<br><h3 class="text-info">Cost</h3><br>
                <p>The cost of this technology is very cheap comparing to it's wide range of benefits. You can pay in both online and cash.
    		    <br>Rent fees: Per hour around 40 BDT.</p>    			
    		</div>    		    		
    	</div>
    </div>
 
    <!-----------------------------------------Features New--------------------------------------------------->
    <div class="container-fluid" style="margin-top: 10%;">
    	<div class="row">
    		<div class="col-md-12 text-center">
    			<h1 class="text-success font124"><b>Features & User Guideline</b></h1>
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-md-4 text-center">
    			<br><h3 class="text-info text-center">Users</h3><br>
    			<img src="../psb/images/users.gif" class="image125 mx-auto d-block">
    			<h6>We have two users. Either-<br> <b>Driver:</b> Driver will hire the parking space for selected time.<br> or<br><b>Space Owner:</b> The space owner will rent his place and earn.</h6>
    		</div>
    		<div class="col-md-4 text-center">
    			<br><h3 class="text-info text-center">Categorised</h3><br>
    			<img src="../psb/images/category.jpg" class="image125 mx-auto d-block">
    			<h6>There are categories for <b>vehicle type</b>,<b> parking space type</b> and many others.<br>Vehicle type includes car,truck,bike etc.<br>Sapce type includes Bike space, car space etc.</h6>
    		</div>
    		<div class="col-md-4 text-center">
    			<br><h3 class="text-info text-center">Slot</h3><br>
    			<img src="../psb/images/clock.gif" class="image125 mx-auto d-block">
    			<h6>User will select the time and duration of parking. For this action <b>REGISTRATION</b> is mandatory. User can also <b>book</b> parking space for particular time.</h6>
    		</div>
    		<div class="col-md-4 text-center">
    			<br><h3 class="text-info text-center">Search</h3><br>
    			<img src="../psb/images/search.gif" class="image125 mx-auto d-block">
    			<h6>Just search the epected location for parking in <b>Search Menu</b> after login.</h6>
    		</div>
    		<div class="col-md-4 text-center">
    			<br><h3 class="text-info text-center">Cancel</h3><br>
    			<img src="../psb/images/cancel.jpg" class="image125 mx-auto d-block">
    			<h6>User can also cancel booking within <b>15 minutes</b>. This will help others and save user's time.</h6>
    		</div>
    		<div class="col-md-4 text-center">
    			<br><h3 class="text-info text-center">Secuirity</h3><br>
    			<img src="../psb/images/security1.png" class="image125 mx-auto d-block">
    			<h6>Our website is secured with our expert developers. Any unusal activity is <b>strictly prohibited</b></h6>
    		</div>

    	</div>    	
    </div>


    <!------------------------------------------------------------FEATURES-----------------------------------------------------------
    <div class="container-fluid" style="margin-top: 5%; text-align: center;">
    	<section class="bgimage2">
    	    <div class="overlay">
    		    <h1 class="regular">Our Features</h1>
    		    <ul class="nav nav-pills fregularNew">
    			    <li class="nav-item">
    				    <a class="nav-link active fcolor4" data-toggle="tab" href="#user"><h4>Users</h4></a>
    			    </li>
    			    <li class="nav-item">
    				    <a class="nav-link fcolor4" data-toggle="tab" href="#category"><h4>Categorised</h4></a>
    			    </li>
    			    <li class="nav-item">
    				    <a class="nav-link fcolor4" data-toggle="tab" href="#slot"><h4>Slot</h4></a>
    			    </li>
    			    <li class="nav-item">
    				    <a class="nav-link fcolor4" data-toggle="tab" href="#search1"><h4>Search</h4></a>
    			    </li>
    			    <li class="nav-item">
    				    <a class="nav-link fcolor4" data-toggle="tab" href="#cancel"><h4>Cancel</h4></a>
    			    </li>
    			    <li class="nav-item">
    				    <a class="nav-link fcolor4" data-toggle="tab" href="#security"><h4>Security</h4></a>
    			    </li>
    		    </ul>
    		    !-- Tab panes --
    		    <div class="tab-content">
    			    <div class="tab-pane container active" id="user">
    				    <h6 class="fcolor999"><br><br><br> We have two users. Either-<br><br> <b>Driver:</b> Driver will hire the parking space for selected time.<br><br> or<br><br><b>Space Owner:</b> The space owner will rent his place and earn.<br><br><br><br><br><br><br></h6>
    			    </div>
    			    <div class="tab-pane container fade" id="category">
    				    <h6 class="fcolor999"><br><br><br>There are categories for <b>vehicle type</b>,<b> parking space type</b> and many others.<br><br>Vehicle type includes car,truck,bike etc.<br><br>Sapce type includes Bike space, car space etc.<br><br><br><br><br><br><br><br><br></h6>
    			    </div>
    			    <div class="tab-pane container fade" id="slot">
    				    <h6 class="fcolor999"><br><br><br>User will select the time and duration of parking. For this action <b>REGISTRATION</b> is mandatory. User can also <b>book</b> parking space for particular time.<br><br><br><br><br><br><br><br><br><br><br><br><br></h6>
    			    </div> 
    			    <div class="tab-pane container fade" id="search1">
    				    <h6 class="fcolor999"><br><br><br>Just search the epected location for parking in <b>Search Menu</b> after login.<br><br><br><br><br><br><br><br><br><br><br><br><br><br></h6>
    			    </div>
    			    <div class="tab-pane container fade" id="cancel">
    				    <h6 class="fcolor999"><br><br><br>User can also cancel booking within <b>15 minutes</b>. This will help others and save user's time.<br><br><br><br><br><br><br><br><br><br><br><br><br><br></h6>
    			    </div>
    			    <div class="tab-pane container fade" id="security">
    				    <h6 class="fcolor999"><br><br><br>Our website is secured with our expert developers. Any unusal activity is <b>strictly prohibited</b><br><br><br><br><br><br><br><br><br><br><br><br><br><br></h6>
    			    </div>
    		    </div>
    	    </div>
    	</section>	
    </div>-->
    </header>

    

    <!-------------------------------------------------------FOOTER----------------------------------------------------------->
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
                    <a href="registration.html" class="text-secondary" style="text-decoration: none;">Register</a><br>
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