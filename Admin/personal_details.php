<?php include 'sign_header.php';?>  
    
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
    </style>
    <body>
        <div class="row">
            <div class="col-sm-5"></div>
        </div>
        <div class="row">
            <div class="col-sm-5">
        <div class="container">
            <form>
            <div class="row">
                <div class="col-sm-12">
                    <h3><b>Personal Details</b></h3>
                </div>
            </div><br>
            <div class="row">
                <div class="col-sm-12">
                    <label>Full Name</label>
                    <input type="text" name="" class="form-control" placeholder="Enter full name" onkeypress="javascript :return isString(event)" required>
                </div>
            </div>

   <!-- <br>         -->
            <div class="row">
                <div class="col-sm-12">
                    <label>Address</label>
                    <textarea name="" placeholder="Enter address" class="form-control" onkeypress="javascript :return isString(event)" required></textarea>
                </div>
            </div>
<!-- <br> -->
           
            <div class="row">
                <div class="col-sm-12">
                    <label>Email</label>
                    <input type="email" name="" class="form-control" placeholder="Enter email" required>
                </div>
            </div>

 <!-- <br> -->
            <div class="row">
                <div class="col-sm-12">
                    <label>DOB</label>
                    <input type="date" name="" class="form-control" onkeypress="javascript :return isNumber(event)"required>
                </div>
            </div>
<!-- <br> -->
           
            <div class="row">
                <div class="col-sm-12">
                   <label>Gender </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender" >Male &nbsp;&nbsp;
                    <input type="radio" name="gender" >Female
                </div>
            </div>
 
<br>

          <div class="row">
             <div class="col-sm-12">
                 <label>contact</label>
                    <input type="text" name="" class="form-control " placeholder="Enter contact number " onkeypress="javascript :return isContactno(event)" required>
             </div>
         </div>
<!-- <br> -->

<br>

 <div class="row">
     <div class="col-sm-12">
         <input type="submit" name="" value="Save" class="form-control" style="background-color: rgb(108, 146, 146); color: white;" >
     </div>
 </div>
<br>
<div class="row">
     <div class="col-sm-12">
        <a href="qualification.php">
         <input type="button" name="" value="Next->->" class="form-control" style="background-color: rgb(108, 146, 146); color: white;" >
         </a>
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
<?php include 'Admin_footer.php';?> 