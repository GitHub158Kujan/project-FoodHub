<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="my account.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style1.css">
    <title>Food Website Settings</title>
</head>
<body>
    <div class="container">
        <h2>Place Order</h2>
        <div class="cross">
            <a href="cheese burger.php"><i class="fa-solid fa-xmark" style="color: #000000;"></i></a></div>
        <form id="settingsForm" method="POST">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName"  name="fname"required>

            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lname" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="add" required>

            <label for="city">City:</label>
            <input type="text" id="city" name="city"required>

            <label for="zipcode">Zipcode:</label>
            <input type="text" id="zipcode" name="zip" maxlength="6" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email"required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" maxlength="10" name="phn" required>
    
            <button type="submit" id="saveBtn" name="submit">Place Order</button>
            <input type="reset" id="reset" value="Reset">
            </div>
        </form>
    </div>

<script src="javascript.js"></script>
</body>
</html>
<?php include 'connection.php'?>
<?php
if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $add=$_POST['add'];
    $city=$_POST['city'];
    $zip=$_POST['zip'];
    $email = $_POST['email'];
    $phn=$_POST['phn'];
    $query = "INSERT INTO `order`(first_name, last_name, Address_ , City, Zipcode, Email, Phone_no) VALUES ('$fname','$lname','$add','$city','$zip','$email','$phn')";
    $data=mysqli_query($con, $query);
    if ($data) {
        ?>
        <script type="text/javascript">
            alert("Thank you for ordering!! Keep ordering with us.");
            window.location.href = "menu2.html";
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