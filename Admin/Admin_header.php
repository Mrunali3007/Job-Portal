
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
 
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link " href="dash.php">Home
           
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="personal_details.php">Your Details</a>
          
        </li>
        <li class="nav-item">
          <a class="nav-link" href="category_list.php">jobs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>

         <li class="nav-item">
          <a class="nav-link" href="logout.php">Log Out</a>
        </li>

     </ul>
       </div>
  </div>
</nav>




 