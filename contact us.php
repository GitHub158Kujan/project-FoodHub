<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Responsive Contact us Page Design</title>
<link rel="stylesheet" type="text/css" href="contact us.css">
</head>
<body>
	<nav class="navbar">
		<div class="logo">
			 <img src="feastlogo2.png"> 
			 <p id="nav-p">FeastHub</p>
		  </div>
			  <ul>
				  <li class="list"><a href="home page of website.html">Home</a></li>
                <li class="list"><a href="Menu2.html">Menu</a></li>
                <li class="list"><a href="About.html">About</a></li>
                <li class="list"><a href="contact us.php">Contact</a></li>
                <li class="list"><a href="sign up page.php">SignUp</a></li>
			  </ul>
	 </nav>
	<section class="contact">
		<div class="content">
			<h2>Contact Us</h2>
	
		</div>
		<div class="container">
			<div class="contactInfo">
				<div class="box">
					<div class="icon"><ion-icon name="location-outline"></ion-icon></div>
					<div class="text">
						<h3>Address</h3>
						<p>123 Main street<br>City Phagwara<br>Punjab, India</p>
					</div>
				</div>
				<div class="box">
					<div class="icon"><ion-icon name="call-outline"></ion-icon></div>
					<div class="text">
						<h3>Phone</h3>
						<p>+91 3456-7890</p>
					</div>
				</div>
				<div class="box">
					<div class="icon"><ion-icon name="mail-outline"></ion-icon></div>
					<div class="text">
						<h3>Email</h3>
						<p>contact@feasthubgmail.com</p>
					</div>
				</div>
				<h2 class="txt">Connect with us</h2>
				<ul class="sci">
					<li><a href="https://www.facebook.com/profile.php?id=61553934504709"><ion-icon name="logo-facebook"></ion-icon></a></li>
					<li><a href="https://twitter.com/Feast_Hub"><ion-icon name="logo-twitter"></ion-icon></a></li>
					<li><a href="https://www.instagram.com/feast_hub12/"><ion-icon name="logo-instagram"></ion-icon></a></li>
				</ul>
			</div>

			<div class="contactForm">
				<form method="POST">
					<h2>Send Message</h2>
					<div class="inputBox">
						<input type="text" name="name" required="required">
						<span>Full Name</span>
					</div>
					<div class="inputBox">
						<input type="email" name="email" required="required">
						<span>Email</span>
					</div>
					<div class="inputBox">
						<textarea required="required" name="message"></textarea>
						<span>Type your Message...</span>
					</div>
					<div class="inputBox">
						<input type="submit" value="Send" name="send">
					</div>
				</form>
			</div>
		</div>
	</section>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
<?php include 'contact us connection.php'?>
<?php
if(isset($_POST['send']))
 {
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$query="insert into contactus_form(Name,Email,Message) values('$name','$email','$message')";
	 $data=mysqli_query($con,$query);
	 if($data)
	 {
		   if(empty($email)){
   echo"email is required<br>";
   }
   elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
   echo"Invalid email format<br>";
   }
	?>
	<script type="text/javascript">
	alert("Thank you for reaching out! We have received your message and will get back to you as soon as possible.");
	window.location.href="home page of website.html";
	</script>
	 <?php
	 }
	 else
	 {
	?>	 
	<script type="text/javascript">
	alert("Please try again");
	window.location.href="#";
	</script>
	<?php
	 }
 }
?>
