<?php include 'connection.php'?>
<?php
$update = "ALTER TABLE `order` MODIFY COLUMN Sr_no INT(3) AUTO_INCREMENT ";
$result = mysqli_query($con, $update);
if ($result) {
    echo "Data has been updated successfully";
} else {
    echo "Error: " . mysqli_error($con);
}
?>
<br><br>
<button><a href="display data.php"> View Updated data</a></button>
