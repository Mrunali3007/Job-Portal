<?php include 'Admin_header.php';
if(isset($_POST['btnsubmit']))
{
    $sql="insert into add_category(cname,cdesc)values('".$_POST['txt_cname']."','".$_POST['txt_desc']."')";
    if(mysqli_query($conn,$sql))
    {
        echo "Record Inserted";
    }
    else
    {
        echo "Record Not Inserted".mysqli_error($conn);
    }
}

?>

  <style>
    body {
  font-family: Arial, sans-serif;
 
  background-image: url('3dimg2.jpg');
  background-repeat: no-repeat;
  background-size: cover;
}


h1 {
  text-align: center;
}

form {
  max-width: 400px;
  margin: 20px auto;
}

label {
  display: block;
  margin-bottom: 10px;
}

input[type="text"],
textarea {
  width: 100%;
  padding: 5px;
  margin-bottom: 10px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 15px;
  border: none;
  cursor: pointer;
  width: 100%;
}

input[type="submit"]:hover 
{
  background-color: #45a049;
}
input[type="button"]:hover
{
  color:sky
}
.container
{
  color: white; 
  background-color: rgba(255, 255, 255, 0.3);;
  width:450px;
  height: 450px;
  padding: 20px;
  margin-top: 100px;
  margin-left: 100px;
  margin-bottom: 50px;
}
</style>


<div class="container">
  <h1>Add Job Category</h1>
  <form action="category.php" method="post">
    <label for="categoryName">Category Name:</label>
    <input type="text"  name="txt_cname" required>

    
    <label for="description">Description:</label>
    <textarea  name="txt_desc" required></textarea>
  
  <br><br>
    <input type="submit" name="btnsubmit" value="Add Category">

    <br><br>
    <a href="category_list.php">
    <input type="button" name="btnsubmit" value="View Category List Here.." style="background-color:skyblue;"></a>
  </form>
</div>


  <script src="script.js">
     
  document.getElementById("jobCategoryForm").addEventListener("submit", function(event) {
  event.preventDefault(); // Prevent form submission

  // Retrieve form values
  var categoryName = document.getElementById("categoryName").value;
  var description = document.getElementById("description").value;

  // Perform validation (you can add more validation logic)
  if (categoryName.trim() === "" || description.trim() === "") {
    alert("Please fill in all fields.");
    return;
  }

  // Create an object to hold category data
  var category = {
    name: categoryName,
    description: description
  };

  // Perform further processing (e.g., send data to server, store in database, etc.)
  // ...
  
  // Clear form fields
  document.getElementById("jobCategoryForm").reset();
});




  </script>
</body>

<?php include 'Admin_footer.php'?>