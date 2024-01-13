<?php include 'connection.php'?>
<?php
if(isset($_POST['save']))
 {
$name=$_POST['name'];
$email=$_POST['email'];
$feedback=$_POST['feedback'];
$query="INSERT into review_table(name,email,feedback) VALUES('$name','$email','$feedback')";
	 $data=mysqli_query($con,$query);
	 if($data)
	 {
	?>
	<script type="text/javascript">
	alert("Thank you! Your feedback has been submitted.");
	</script>
	
	 <?php
	 }
	 else
	 {
		 ?>
		 
		 <script type="text/javascript">
	alert("Please try again");
	</script>
	<?php
	 }
 }
?>