
<?php
   $userName = $_GET['Username'];
   $passWord = $_GET['Password'];

   $con = new mysqli("localhost","root","","login");
   if($con->connect_error)
   {
	   die("Failed to connect : ".$con->connect_error);
   }
   else
   {
	   $stmt = $con->prepare("select * from customer where username = ?");
	   $stmt->bind_param("s",$username);
	   $stmt->execute();
	   $stmt_result = $stmt->get_result();
	   if($stmt_result->num_rows >0)
	   {
		   
	   }else
	   {
		   echo "<h2>invalid username or password ";
		   
	   }
   }

?>
