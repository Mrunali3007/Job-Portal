<?php include 'Admin_header.php';?> 
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
        <script src="validation.js"></script>
    </head>
    <style>
        body
        {
            background: linear-gradient(to bottom right, #003366 48%, #666699 78%);

        }
        .container
        {
            padding: 20px;
            margin-top: 50px;
            margin-left: 400px;
           background-color: rgba(255, 255, 255, 0.3);
           
        }
        label
        {
            text-align: center;
        }
    </style>
    <body>
        <div class="row">
            <div class="col-sm-5"></div>
        </div>
        <div class="row">
            <div class="col-sm-5">
        <div class="container">
            <form id="create_new_account">
            <div class="row">
                <div class="col-sm-12">
                    <h3><b><u>Create your New Account ...</u></b></h3>
                </div>
            </div><br>
            <div class="row">
                <div class="col-sm-12">
                    <label>Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
            </div>

           <br>
            <div class="row">
                <div class="col-sm-12">
                    <label>Your Email address</label>
                    <input type="email" name="email" id="email" class="form-control"required>
                </div>
            </div>

           <br>
            <div class="row">
                <div class="col-sm-12">
                    <label>Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
            </div>
<br>
           
            <div class="row">
                <div class="col-sm-12">
                    <label>Confirm Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
            </div>
<br>
           
            <div class="row">
                <div class="col-sm-12">
                   
                    <input type="checkbox" name="" >&nbsp;&nbsp;
                    <label>Remember me</label>
                </div>
            </div>
  
           <br>
            <div class="row">
                <div class="col-sm-12">
                    
                    <input type="button" name="" value="Submit" class="form-control" style="background-color: rgb(108, 146, 146); color: white;" >
                </div>
            </div>


            <br>
            <div class="row">
                <div class="col-sm-12">
                    <label>Already having a new account ?</label>&nbsp;&nbsp; &nbsp;&nbsp;
                  <a href="signup.html" onkeypress="Submit" style="color: blue;"> Sign In</a>
                </div>
            </div>
            

</form>
        </div>
      </div>
   </div>
   <div class="row">
    <div class="col-sm-2"></div>
</div>
    </body>
</html>