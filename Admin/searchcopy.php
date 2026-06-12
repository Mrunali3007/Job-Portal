<?php include 'admin_header.php';

error_reporting(0);
//delete
if(isset($_POST['btndelete']))
{
   $sql="delete from category_tbl where id='".$_POST['txt_id']."'";

   if(mysqli_query($conn,$sql))
   {
    echo "<script>alert('Record Deleted')</script>";
   }
   else
   {
    echo "Record Not Deleted";
   }
}

//update

if(isset($_POST['btnupdate']))
{
  $sql="update category_tbl set cname='".$_POST['txt_cname']."',cimage='".$_POST['txt_cimage']."',desccr='".$_POST['txt_desccr']."' where id='".$_POST['txt_id']."'";
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

<div class="container">
	<h2>Category List</h2>

<form action="category_list.php" method="post">
   <div class="row">
     <div class="col-sm-6"></div>
     <div class="col-sm-5">
        <input type="text" name="txt_catname" class="" placeholder="Enter Category name">
         <input type="text" name="txt_desccr" class="" placeholder="Enter Category name">
  
     </div>
     <div class="col-sm-1">
       
  <input type="submit" name="btnserach" value="Search" class="btn btn-warning">
     </div>
   </div>
   </form>
   <br>
 
  
	<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Category Name</th>
      <th scope="col">Image</th>
      <th scope="col">Description</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $i=1;

    $sql="";

    if($_POST['txt_catname'])
    {

    $sql=mysqli_query($conn,"select * from category_tbl where cname='".$_POST['txt_catname']."' or desccr='".$_POST['txt_desccr']."'");
    }
    else
    {
      $sql=mysqli_query($conn,"select * from category_tbl");
    }

    while($row=mysqli_fetch_assoc($sql))
    {


    echo '<tr>
    <form action="category_list.php" method="POST">
      <th scope="row">'.$i++.'</th>
      <input type="hidden" name="txt_id" value="'.$row['id'].'">
       <td>
      <input type="text" name="txt_cname" value="'.$row['cname'].'" class="form-control"> </td>
      <td><input type="text" name="txt_cimage" value="'.$row['cimage'].'" class="form-control"></td>
      <td><input type="text" name="txt_desccr" value="'.$row['desccr'].'" class="form-control"></td>
      <td><input type="submit" name="btnupdate" class="btn btn-success" value="Update"></td>
      <td><input type="submit" name="btndelete" class="btn btn-danger" value="Delete"></td>
      </form>
    </tr>';
   }
    ?>
    
  </tbody>
</table>
</div>


<?php include 'admin_footer.php'; ?>