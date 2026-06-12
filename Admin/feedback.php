<?php include 'sign_header.php';?> 
<style>
  body
  {
      background: linear-gradient(to bottom right, #0033 48%, #665 78%);
  
     
     
  }
  .container
  {
      padding: 20px;
      background-color: white;
      text-align: center;
      box-shadow: rgb(79, 79, 82) 1px 1px;
      margin-left: 250px;
      margin-top: 20px;
  }
  input[type=text],[type=email]
  {
      box-shadow: inset;
  }
  input[type=button]
  {
      background-color: rgb(63, 63, 71);
      color: white;
  }
  textarea
  {
      box-shadow: inset;
  }
  nav
  {
      margin: 0px;
      background-size: cover;
  }

</style>
<body>
 
  
<br><br>
      


        <div class="row">
            <div class="col-sm-3">
            </div>
        </div>
               <div class="row">
                <div class="col-sm-6">
              <div class="container" style="border:2px; color:  rgb(84, 73, 95);">
                  <h3>FEEDBACK FORM</h3>
                  <div class="row">
                       <div class="col-sm-12">
                             <input type="text" name="" placeholder="First Name" class="form-control" required>
                       </div>
                  </div>
                  <br>
                  <div class="row">
                      <div class="col-sm-12">
                          <input type="text" name="" placeholder="Last Name" class="form-control" required>
                      </div>
                  </div>
                  <br>
                  <div class="row">
                      <div class="col-sm-12">
                          <input type="text" name="" placeholder="Phone Number" class="form-control" required>
                      </div>
                  </div>
                  <br>
                  <div class="row">
                      <div class="col-sm-12">
                          <input type="email" name="" placeholder="Email" class="form-control" required>
                      </div>
                 </div>
                 <br>
                 <div class="row">
                    <div class="col-sm-12">
                          <textarea name="" placeholder="Your Feedback" class="form-control" ></textarea required>
                    </div>
                 </div>
                 <br>
                 <a href="dash.php">
                 <input type="button" name="btnfeed" value="SUBMIT" class="form-control" onclick="feed()">
            </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3"></div>
    </div>
        </div> 
    </div>
</body>
<script type="text/javascript">
  function feed()
  {
    alert"Feedback Submitted !!";
  }
</script>
<?php include 'Admin_footer.php';?> 