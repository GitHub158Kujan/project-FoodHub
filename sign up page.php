
<?php include 'connection.php'?>
<?php
      $passwordErr="";
      $conpasswordErr="";
      $emailErr="";


if(isset($_POST['save']))
{
  $user = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conpass = $_POST['confpass'];
    $number = preg_match('/[0-9]/', $password);
    $uppercase = preg_match('/[A-Z]/', $password);
    $lowercase = preg_match('/[a-z]/', $password);
    $specialChars = preg_match('/[^\w]/', $password);
    $sql = "SELECT * FROM sign_up_table WHERE (Email = '$email');";
    $res = mysqli_query($con, $sql);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        if ($email == $row['Email']) {
            $emailErr= "Email already exists.<br>";
        }
    }
    else{ 
    if (strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
        $passwordErr = "Password must be at least 8 characters and must contain at least one number, 
        one upper case letter, one lower case letter, and one special character.<br>";
    } else {
        $passwordErr = "Your password is strong.<br>";

        if ($conpass !== $password) {
            $conpasswordErr = "Password does not match.<br>";
        } else {
        
            $query = "INSERT INTO sign_up_table (username, email, password, conf_pass) VALUES ('$user', '$email', '$password', '$conpass')";
            $data = mysqli_query($con, $query);

            if ($data) {
                ?>
                <script type="text/javascript">
                    alert("Welcome to the heaven of delicious food");
                    window.location.href = "location.html";
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
    }
}
}
?>
<html>
    <head>
        <link rel="stylesheet" href="sign up.css">
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
            function myfunction2(){
            var x = document.getElementById('check2');
            if(x.type=="password"){
                x.type="text";
            }
            else{
                x.type="password";
            }
            }
        </script>
    </head>
    <body>
        <form method="post">
            <div class="form_cont">
            <div class="form_cont2">
            <h2>Sign Up</h2>
            <label for="user" class="font">Username </label><br>
            <input type="text" name="user" id="user" required><br><br>
            <label for="email" class="font">Email</label><br>
            <input type="Email" name="email" id="email" required ><br><br>
            <span style="color:red; font-size:12px;"><?php echo $emailErr?></span>
            <label for="check" class="font">Password</label><br>
            <input type="password" name="password" id="check" required><br>
            <span style="color:red; font-size:12px;"><?php echo $passwordErr?></span>
            <input type="checkbox" id="show_password" name="checkbox"  onclick="myfunction()">
            <label  for="show_password"class="font2">Show Password</label><br><br>
            <label for="check2" class="font" >Confirm Password</label><br>
            <input type="password" name="confpass" id="check2" required><br>
            <span style="color:red; font-size:12px;"><?php echo $conpasswordErr?></span>
            <input type="checkbox" id="con-pass" name="checkbox"  onclick="myfunction2()">
			      <label  for="con-pass"class="font2">Show Password</label><br><br>
            <div class="font">
	          Already have an account?<a href="log in page.php">Log in</a><br><br>
	         </div>
            <input type="Submit" name="save" value="Sign Up">
            </div>
            </div>
        </form>
    </body>
</html>



