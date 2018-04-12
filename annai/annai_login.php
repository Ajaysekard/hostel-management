<?php include("config.php"); ?>
<?php include("header3.php"); ?>
    <div class="row" style="padding-top:100px;">
        <div class="container">
           
            <div class="row">
                <div class="col-sm-3">
                <center>
                    <img src="images/annai-illam.jpg" width="300" height="202" alt="" class="img-rounded"/>

</center>
                </div> 
                  <div class="col-sm-8">
                <center>
                    <form class="form-horizontal" method="post">
<fieldset>

<!-- Form Name -->
<legend>Login Form</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="User Name">User Name</label>  
  <div class="col-md-4">
  <select class="form-control" name="person" required>
  <option>Admin</option>
  <option>Manager</option>
    <option>HoD</option>
    <option>Mentor</option>
  </select>

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password" autocomplete="off">Password</label>  
  <div class="col-md-4">
  <input  name="password" type="password" placeholder="password" class="form-control input-md">
  
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Submit"></label>
  <div class="col-md-6">
    <button  name="Submit" class="btn btn-primary">Submit</button>
     <button  name="Reset" class="btn btn-primary">Reset</button>
  </div>
</div>

</fieldset>
</form>
<?php
		  if(isset($_POST["Submit"]))
		  {
		  	$query="select * from  userlogin where user ='".$_REQUEST["person"]."' and password='".$_REQUEST["password"]."'";
			$res=mysql_query($query);
			$num_of_rows=mysql_num_rows($res);
						if($num_of_rows==1)
			{
				$_SESSION['admin_session']=$_REQUEST['person'];
				
				$opt= $_SESSION['admin_session'];
				if ($opt=="Admin")
				{
				echo "<script>location.href='./dashboard.php'</script>";
				}
				elseif($opt=="Manager")
				{
				echo "<script>location.href='./dashboard.php'</script>";
			}
			elseif($opt=="HoD")
				{
				echo "<script>location.href='madmin_annai.php'</script>";
			}
			elseif($opt=="Mentor")
				{
				echo "<script>location.href='./mentor/dashboard.php'</script>";
			}
			else
			{
				echo "Select Valid User";
			}
			}
			else
			{
				echo "Wrong User Name and Password";
			}
		 }
		  ?>

</center>
                </div> 
              
    </div> 
</div>
 </div>
 </div>
 </div>

  <?php include("footer.php"); ?>
