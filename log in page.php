<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Log in</title>
  <link rel="stylesheet" href="log in.css">
  <script>
            function myfunction(){
            var x = document.getElementById('check');
            if(x.type=="password"){
                x.type="text";
            }
            else{
                x.type="password";
            }
            }
  function isvalid(){
	var user=document.form.email.value;
	var pass=document.form.pass.value;
	if(user.length==""&& pass==""){
		alert("Email and password fields are empty!");
		return false;
	}
	else{
		if(user.length==""){
		alert("Email field is empty!");
		return false;
		}
		if(pass.length==""){
		alert("Password field is empty!");
		return false;
		}
		
	}
}
</script>
</head>
<body>
  <form name="form" method="POST" onsubmit="return isvalid()">
            <div class="form_cont">
            <div class="form_cont2">
            <h2>Log in</h2>
        <label for="email" class="font">Email </label><br>
        <input type="email" placeholder="Enter your email" name="email" required >
        <label for="check" class="font"><br>Password </label><br>
        <input type="password" placeholder="Password"  id="check"  name="password" required >
        <input type="checkbox" id="show_password" name="checkbox"  onclick="myfunction()">
        <label  for="show_password"class="font2">Show Password</label><br>
        <div class="font">
          <br>
	          Don't have an account?<a href="sign up page.php">Sign Up</a><br><br>
	         </div>
        <input type="submit" value="Log in" name="login">
  </form>
</div>
</div>
</body>
</html>
<?php include 'connection.php'?>
<?php
if (isset($_POST['login'])) {
	$email=$_POST['email'];
	$password=$_POST['password'];
	$sql="select * from sign_up_table where Email='$email' AND password='$password'";
	$result= mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count=mysqli_num_rows($result);
  if (!$result) {
    die('Invalid query: '. mysqli_error($con));
}
	if($count==1){
		
    ?>
                <script type="text/javascript">
                    alert("Logged in successfully!! Welcome Back!!");
                    window.location.href = "home page of website.html";
                </script>
                <?php
            } else {
                ?>
                <script type="text/javascript">
                    alert("Please try again");
                    window.location.href = "#";
                </script>
                <?php
            }
        }
?>

