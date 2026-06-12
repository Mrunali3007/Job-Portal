<?php include 'sign_header.php';?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="qualification.js">
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <title>Qualification Form</title>
  <style>
    .container 
    {
      padding: 20px;
      margin-top: 50px;
      margin-left: 350px;
      max-width: 700px;
      margin: 50px auto;
      background-color:  rgb(172, 166, 166);
     
    }
    .form-group label 
    {
      font-weight: bold;
    }
    .submit-btn
     {
      margin-top: 20px;
    }
    body
    {
     background-color: rgb(84, 73, 95);
    }
  </style>
</head>
<body>
  <div class="container" style="border: solid 2px 2px;">
    <center>
    <h2><b><u>Qua</u>lification Form</b></h2>
  </center>
  <br>
    <form id="qualificationForm">
      <div class="form-group">
        <label for="fullName">Full Name</label>
        <input type="text" class="form-control" id="fullName" required>
      </div>
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" class="form-control" id="email" required>
      </div>
      <div class="form-group">
        <label for="qualification">Qualification</label>
        <select class="form-control" id="qualification" required>
          <option value="">Select</option>
           <option value="SSC">10th Pass</option>
            <option value="HSC">12th Pass</option>
          <option value="bachelors">Bachelor's Degree</option>
          <option value="masters">Master's Degree</option>
          <option value="phd">PhD</option>
        </select>
      </div>
      <br>
      <label><b>What is Your Current Employement Status</b></label>
      <br>
      <input type="Radio" name="status">Employed
      <br>
      <input type="Radio" name="status">Un-Employed
      <br>
      <input type="Radio" name="status">Self-Employed
      <br>
      <input type="Radio" name="status">Student
      <br>
      <br>
    <div class="form-group">
        <label for="workExperience">Work Experience At(Company name)</label>
        <textarea class="form-control" id="workExperience" name="workExperience" rows="4" required></textarea>
    </div>
    <div class="form-group">
        <label for="skills">Skills:</label>
        <input type="text" class="form-control" id="skills" name="skills" required>
    </div>
   <div class="form-group">
        <label for="experience">Years of Experience</label>
        <input type="number" class="form-control" id="experience" required>
      </div>
     
      <button type="submit" class="btn btn-primary submit-btn">Cancle</button>
      <button type="submit" class="btn btn-primary submit-btn">SUBMIT</button>
      <a href="educational_details.php">
      <input type="button" name="" value="Next->"class="btn btn-primary" class="form-control">
      </a>
    </form>
  </div>

  <script>
    document.getElementById("qualificationForm").addEventListener("submit", function(event) {
      event.preventDefault(); // Prevent form submission

      // Get form values
      var fullName = document.getElementById("fullName").value;
      var email = document.getElementById("email").value;
      var qualification = document.getElementById("qualification").value;
      var experience = document.getElementById("experience").value;

      // Validate form
      if (!fullName || !email || !qualification || !experience) {
        alert("Please fill in all fields");
        return;
      }

      // Perform further processing or submission logic here
      // You can send form data to a server using AJAX or perform any other required actions

      // Clear form after submission
      document.getElementById("qualificationForm").reset();
      alert("Form submitted successfully!");
    });
  </script>
</body>
<?php include 'Admin_footer.php';?> 