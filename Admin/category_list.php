<!-- <?php include 'Admin_header.php';?> -->


<!-- delete query -->

<?php include 'admin_header.php';
error_reporting(0);

if(isset($_POST['btndelete']))
{
   $sql="delete from add_category where id='".$_POST['txt_id']."'";

   if(mysqli_query($conn,$sql))
   {
    echo "<script>alert('Record Deleted')</script>";
   }
   else
   {
    echo "Record Not Deleted";
   }
}
if(isset($_POST['btnupdate']))
{
  $sql="update add_category set cname='".$_POST['txt_cname']."',desc='".$_POST['txt_desc']."' where id='".$_POST['txt_id']."'";
  if(mysqli_query($conn,$sql))
  {
    echo "Record Updated";
  }
  else
  {
    echo "Record Not Updated";
  }
}
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <title></title>
</head>
<style>
  body
        {
/*            background-color: rgb(84, 73, 95);*/
            background-image:  url('OIP (2).jpg');
            background-repeat: no-repeat;
            background-size: cover;

        }
        .container
        {
            padding: 20px;
            margin-top: 50px;
            margin-left: 25px;
             background-color: rgba(255, 255, 255, 0.3);
/*           background-color: #c3a5d9;*/
            box-shadow: rgb(79, 79, 82) 1px 1px;
        }
</style>
<div class="row">
	<div class="col-sm-2"></div>
	  <div class="col-sm-8">
    <div class="container">
	  <h2>Category List</h2>
   <form action="category_list.php" method="post">
   <div class="row">
     <div class="col-sm-7"></div>
     <div class="col-sm-3">
        <input type="text" name="txt_cname" class="" placeholder="Enter Category name" class="form-control" style="border-radius: 2px;">
          </div>
  
    <div class="col-sm-2">
       
   <input type="submit" name="btnserach" value="Search" class="btn btn-warning" class="form-control">
   </div>


    
   </div>
   </form>
   <br>
 
	 <table class="table table-bordered">
   <thead>
    <tr>
      <th scope="col">SR.</th>

      <th scope="col">Category Name</th>
      <th scope="col">Description</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
      <th scope="col">Apply Job</th>
    </tr>
   </thead>
   <tbody>

    <!-- search query/ -->
    <?php 
     
     $i=1;

    $sql=mysqli_query($conn,"select * from add_category");

   if($_POST['txt_cname'])
    {

    $sql=mysqli_query($conn,"select * from add_category where cname='".$_POST['txt_cname']."'or cdesc='".$_POST['txt_desc']."'");
    }
    else
    {
      $sql=mysqli_query($conn,"select * from add_category");
    }


    while($row=mysqli_fetch_assoc($sql))
    {


   // coloumns
    echo '<tr>
    <form action="category_list.php" method="POST">
      <th scope="row">'.$i++.'</th>
      <input type="hidden" name="txt_id" value="'.$row['id'].'">
      <td><input type="text" name="txt_cname" value="'.$row['cname'].'" class="form-control"> </td>
      <td><input type="text" name="txt_desc" value="'.$row['cdesc'].'" class="form-control"> </td>
      <td><input type="submit" name="btnupdate" class="btn btn-success" value="Update"></td>
     <td><input type="submit" name="btndelete" class="btn btn-danger" value="Delete"></td>
     <td><input type="submit" name="btnapply" class="btn btn-primary" value="Apply for this Job" onkeypress="f1()"></td>
    </tr>';
   }
    ?>

<script type="text/javascript">
 function f1() {
     alert"Application of job is successfully !!";
   }
  
</script>

<?php include 'admin_footer.php'; ?>