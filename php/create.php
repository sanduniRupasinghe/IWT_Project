<?php 

include "config.php";

  if (isset($_POST['submit'])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $psw = $_POST["password"];
    $repeatpsw = $_POST["psw_repeat"];

    $sql = "INSERT INTO `boat`(`name`, `email`,`Phone`, `password`, `psw_repeat`) VALUES ('$name','$email','$phone','$psw','$repeatpsw')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>


<!DOCTYPE html>
<html>
<head>
 <!-- <meta charset="UTF-8"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="../css/bRegister.css"> 
    <link rel="stylesheet" href="../css/header.css"> 
	
    <!-- <title> Boat Registration</title> -->
	<script src="../js/bRegister.js"> </script>
	
</head>


	<body>
		<div class="container">
			<div class="navbar">
			  <div class="menu">
				<h3 class="logo">dream<span>journey</span></h3>
				<div class="hamburger-menu">
				  <div class="bar"></div>
				</div>
			  </div>
			</div>
	  
			<div class="main-container">
			  <div class="main">
				<header>
				 
				  <div class="overlay">

			
			<div class="bSignup_container">
			
			   <div class ="row">
			   <div class ="column">
			   <img src="../images/boat.jpg" alt="" id = "boaterImg" />
			   </div>
			   
			   <div clss="column">
				<div class="bSignup_form" margine="1">
				<div id="inputs">
					<h1>Boat Registration Form</h1>
					<p id="title_para">Creating an account is easy. Just fill in the form below.</p>
			   
			    <div id="card">
				<form name="registration" method="post" action="" >
		
			
				<label for="name"><b>Name</b></label>
				<input type="text" placeholder="Enter Name" name="name" id="name">

				 <label for="email"><b>Email</b></label>
				<input type="text" placeholder="Enter Email" name="email" id="email" required>
				
				<label for="phone"><b>Phone Number</b></label>
				<input type="text" placeholder="Enter Phone Number" name="phone" id="phone_number" required>
			
				<label for="password"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

				<label for="psw_repeat"><b>Repeat Password</b></label>
				<input type="password" placeholder="Repeat Password" name="psw_repeat" id="psw_repeat" required>
		<br>
				<label>
					<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
				</label>
				
				<p>By creating an account you agree to our <a href="#">Terms & conditions</a>.</p> 
	
				<input type="submit" name="submit" value="Register" class="btn">
 	   
					 <!--<div class="row" id="input_one">
							<center><a href="Login.html" target="_blank">Already Have an Account?</a> </center>
					</div>-->
					
				</div>
		
			</form>
			
				</div></div></div></div></div>

		</div>
	</header>
	</div>

	<div class="shadow one"></div>
	<div class="shadow two"></div>
	</div>

	<div class="links">
	<ul>
	<li>
	  <a href="#" style="--i: 0.05s;">Home</a>
	</li>
	<li>
	  <a href="#" style="--i: 0.1s;">Sign in</a>
	</li>
	<li>
	  <a href="blog.html" style="--i: 0.2s;">Blog </a>
	</li>
	<li>
	  <a href="#" style="--i: 0.25s;">About</a>
	</li>
	<li>
		<a href="create.php" style="--i: 0.25s;">Boat Registration</a>
	  </li>

	  <li>
		<a href="view.php" style="--i: 0.25s;">Boat Details View</a>
	  </li>

	<li>
	  <a href="#" style="--i: 0.3s;">Contact</a>
	</li>
	<li>
	  <a href="destination.html" style="--i: 0.3s;">Destination</a>
	</li>
	</ul>
	</div>
	</div>
	<script src="../js/header.js"></script>
	<script src="../js/bRegister.js"></script>
	
		
	</body>
<html>

