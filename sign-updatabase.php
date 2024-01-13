<?php include 'connection.php'?>
<?php
$database="CREATE DATABASE signup_database";
if(mysqli_query($con,$database)){
	echo"Database is created with name sign up<br>";
}
else{
echo"Error creating database: ".mysqli_connect_error($con);
}
mysqli_select_db($con,$database);
$table="CREATE TABLE signup_table(
	email varchar(30) NOT NULL,
	pass varchar(15) NOT NULL,
	conf_pass varchar(15) NOT NULL
	)";
	if(mysqli_query($con,$table)){
		echo"Table student is created succesfully";
	}
	else{
	echo"Error creating table: ".mysqli_error($con);
	}
mysqli_close($con);
?>