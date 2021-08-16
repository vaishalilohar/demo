<?php
  $server_name="localhost";
  $username="root";
  $password="";
  $database_name="login";

$conn = mysqli_connect($server_name,$username,$password,$database_name);
//now connection checked
if(!$conn)
{
	die("Connection failed:" .mysqli_connect_error());
}
if(issue($_POST['save']))
{
	username= $_POST['username'];
	password= $_POST['password'];
	
    $sql_query = "INSER INTO customer(username,password)
    VALUES('$username','$password')";
	if (mysqli_query($conn , $sql_query))
	{
		echo "New Details Entry insteted successfully!";
	}else
	{
		echo "Error: ".$sql."".mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>