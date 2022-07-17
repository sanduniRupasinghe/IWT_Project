<?php 

include "config.php";

    if (isset($_POST['update'])) {

        $boat_id = $_POST['boat_id'];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $psw = $_POST["password"];
        $repeatpsw = $_POST["psw_repeat"];

        $sql = "UPDATE `boat` SET `name`='$name',`email`='$email',`phone`='$phone',`password`=' $psw',`psw_repeat`='$repeatpsw' WHERE `id`='$boat_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

    if (isset($_GET['id'])) {

        $boat_id = $_GET['id']; 
    
        $sql = "SELECT * FROM `boat` WHERE `id`='$boat_id'";
    
        $result = $conn->query($sql); 
    
        if ($result->num_rows > 0) {        
    
            while ($row = $result->fetch_assoc()) {
    
                $name =$row["name"];
                $email = $row["email"];
                $phone = $row["phone"];
                $psw = $row["password"];
                $repeatpsw = $row["psw_repeat"];
                $id = $row['id'];
    
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
					<h1>Update Boat Registration </h1>
					<p id="title_para">Updating an account is easy. Just fill in the form below.</p>
			   
			    <div id="card">
				<form name="registration" method="post" action="" >
		
			
				<label for="name"><b>Name</b></label>
				<input type="text"  name="name" value="<?php echo $name; ?>">
                <input type="hidden" name="boat_id" value="<?php echo $id; ?>">


				 <label for="email"><b>Email</b></label>
				<input type="text"  name="email" value="<?php echo $email; ?> ">
				
				<label for="phone"><b>Phone Number</b></label>
				<input type="text"  name="phone"  value="<?php echo $phone; ?>">
			
				<label for="password"><b>Password</b></label>
				<input type="password"  name="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" value="<?php echo $psw; ?>">

				<label for="psw_repeat"><b>Repeat Password</b></label>
				<input type="password"  name="psw_repeat" id="psw_repeat" value="<?php echo $repeatpsw; ?>">
		<br>
				<input type="submit" name="update" value="UPDATE" class="btn">
 	   					
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
		<a href="create.php" style="--i: 0.25s;">Boat Registration</a>
	  </li>

	  <li>
		<a href="view.php" style="--i: 0.25s;">Boat Details View</a>
	  </li>

	</ul>
	</div>
	</div>
	<script src="../js/header.js"></script>
	<script src="../js/bRegister.js"></script>
	
		
	</body>
<html>



<?php

} else{ 

    header('Location: view.php');

} 

}

?> 