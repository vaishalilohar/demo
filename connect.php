<?php
$userName = $_REQUEST['txtUname'];
$passWord = $_REQUEST['txtPass'];

echo "<br>userName=".$userName;
echo "<br>passWord=".$passWord;

$con = mysqli_connect("localhost","root","","login")or die("connection failed");
mysqli_query($con,insert into customer values('$userName','$passWord')");
?>