<?php include 'sign_header.php';?> 

  <style>
    body
     {
      background-image: url('jp.jpg');
      font-family: Arial, sans-serif;
      background: linear-gradient(to bottom right, #0033 48%, #665 78%);
    }

    .container 
    {
      background-color: rgba(255, 255, 255, 0.3);
      max-width: 600px;
      margin: 0 auto;
      padding: 60px;
/*      background-color: lightgray;*/
      margin-top: 100px;
    }

    .form-group 
    {
      margin-bottom: 20px;
    }

    label 
    {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] 
    {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    button
     {
      display: block;
      width: 100%;
      padding: 10px;
      font-size: 16px;
      background-color: #4caf50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover
     {
      background-color: #45a049;
    }
  </style>

  <div class="container">
    <h1><u>Si</u>gn Up for Job Por<u>tal</u></h1>
    <form id="signup-form">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" onkeypress="javascript :return isNumber(event)" required>
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"  required>
      </div>

      <button type="submit">Sign Up</button>
     <br>
      <div class="row" style="padding:10px;">
         
             <div class="col-sm-12">

              <a href="loginpage.php" >
      <button type="button" value="Next">Next</button>
      </a>

</div>

              <!-- <a href="attach.php" >
                <button type="signup"><b>Next</b></button>
                </a> -->
             
        


<!-- <br>
      <div class="row" style="padding:10px;">
         <div class="col-sm-5"></div>
             <div class="col-sm-2">
              <a href="attach.php" onkeypress="Next">
                <button type="signup"><b>Next</b></button>
                </a>
             </div>
         <div class="col-sm-5"></div>

 -->
    </form>
  </div>
</body>
<script>
    document.getElementById("signup-form").addEventListener("submit", function(event) {
    event.preventDefault();
    var name = document.getElementById("name").value;
     var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;

       Perform validation here (e.g., check against a database)
      if (!(username  && password)) {
         Successful login
       window.location.href = "loginpage.php"; // Redirect to the dashboard
      } else 
      {
       Failed login
        document.getElementById("error-message").innerHTML = "Invalid username or password.";
      }
   });

</script>
<?php include 'Admin_footer.php';?> 