<?php include 'sign_header.php';?>  
  <style>
    body 
    {
      font-family: Arial, sans-serif;
     
      background-size: cover;
      background-repeat: no-repeat;
background: linear-gradient(to bottom right, #0033 48%, #665 78%);
    }
    background-image
    {
      max-height: 900px;
      max-width: 900px;
    }
    .container 
    {
      max-width: 600px;
      max-height: 700px;
      margin: 0 auto;
      padding: 60px;
  background-color: rgba(255, 255, 255, 0.3);
      border-radius: 5px;
      margin-top: 100px;
      margin-bottom: 200px;
    }
    
    .container h2 
    {
      text-align: center;
      margin-bottom: 20px;
    }
    
    .container input[type="text"],
    .container input[type="password"]
     {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      margin-bottom: 10px;
    }
    
    .container input[type="submit"] 
    {
      width: 100%;
      padding: 10px;
      background-color: #4caf50;
      color: #fff;
      border: none;
      cursor: pointer;
      border-radius: 3px;
    }
    
    .container input[type="submit"]:hover 
    {
      background-color: #45a049;
    }
    
    .container .error 
    {
      color: #f44336;
      margin-bottom: 10px;
    }
  </style>

</head>
<body>

<div class="row">
    <div class="col-sm-12">
  <div class="container">
    <center>
    <h1><u>Lo</u>gin</h1>
  </center>
    <form id="login-form" action="dash.php">
      <div class="error" id="error-message"></div>
      <input type="text" id="username" placeholder="Username" required>
      <br><br>
      <input type="password" id="password" placeholder="Password" required>
      <br><br>
      <a href="attach.php">
      <input type="submit"value="Login">
      </a>
          <a href="signup.php" ><b>Sign In</b>
          </a> 
    </form>
</div>
</div>
</div>
</body>
</html>
    </form>
  </div>

  <script>
   
    document.getElementById("login-form").addEventListener("submit", function(event) {
    event.preventDefault();
     var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;
      if (username === "admin" && password === "password") {
        echo" Successful login";
       window.location.href = "attach.php";
      } else 
      {
       Failed login
        document.getElementById("error-message").innerHTML = "Invalid username or password.";
      }
   });
  

</script>



  
</body>
<?php include 'Admin_footer.php';?> 