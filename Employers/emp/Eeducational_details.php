<?php include 'Admin_header.php';?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    </head>
    <script src="validation.js"></script>
    <style>
        body
        {
            background-color: rgb(84, 73, 95);

        }
        .container
        {
            padding: 20px;
            margin-top: 50px;
            margin-left: 350px;
            background-color: rgb(172, 166, 166);
            box-shadow: rgb(79, 79, 82) 1px 1px;
        }
        span
        {
            color: red;
        }
    </style>
    <body>
        <div class="row">
            <div class="col-sm-5"></div>
        </div>
        <div class="row">
            <div class="col-sm-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3><b>Educational Details</b></h3>
                </div>
            </div><br>
            <div class="row">
                <div class="col-sm-12">
                    <label>Full Name<span>*</span></label>
                    <input type="text" name="" class="form-control" placeholder="Enter full name" required>
                </div>
            </div>

   <br>        
            <div class="row">
                <div class="col-sm-12">
                    <label>Board<span>*</span></label>
                    <select class="form-control" required>select Board
                        <option>select Board</option>
                    <option>10th Pass</option>
                    <option>10th Fail</option>
                    <option>12th Pass </option>
                    <option>12th Fail</option>
                    <option>Graduate</option>
                    <option>Non-Graduate</option></select>
                </div>
            </div>
<br>

           
            <div class="row">
                <div class="col-sm-12">
                    <label>Year Passout<span>*</span></label>
                    <input type="month" name="" class="form-control" required>
                </div>
            </div>

 <br>
           
           
            <div class="row">
                <div class="col-sm-12">
                   <label>Marks<span>*</span></label>
                   <input type="text" name="" class="form-control" placeholder="Enter your Marks"required>
                </div>
            </div>
 
<br>

          <div class="row">
             <div class="col-sm-12">
                 <label>Stream<span>*</span></label>
                    <input type="text" name="" class="form-control " minlength="10" maxlength="10" placeholder="Enter Stream name"onkeypress="javascript :return isContactno(event)"required >
             </div>
         </div>
<br>

<br>              

 <div class="row">
     <div class="col-sm-12">
         <input type="button" name="" value="Save" class="form-control" style="background-color: rgb(108, 146, 146); color: white;" >
     </div>
 </div>

        </div>
      </div>
   </div>
   <div class="row">
    <div class="col-sm-2"></div>
</div>
    </body>
</html>
<?php include 'Admin_footer.php';?>