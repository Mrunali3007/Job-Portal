<?php
$conn=mysqli_connect("localhost","root","","jobp");
if($conn==true)
{
  echo "Database Connected";
}
else
{
  echo "Database Not Connected";
}

 ?>
<!DOCTYPE html>
<html>
<head>
	
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
 
</head>

<body>