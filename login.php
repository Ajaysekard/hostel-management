<?php include("config.php"); ?>
<?php include("header.php"); ?>
    <div id="facilities" class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="section-title">
                    Admin</h1>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
            <div class="row">
                <div class="col-sm-3">
                <center>
                    

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
  <input  name="username" type="text" placeholder="User Name" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>  
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
		  	$query="select * from  admin where username ='".$_REQUEST["username"]."' and password='".$_REQUEST["password"]."'";
			$res=mysql_query($query);
			$num_of_rows=mysql_num_rows($res);
			if($num_of_rows==1)
			{
				$_SESSION['admin_session']=$_REQUEST['username'];
				echo "<script>location.href='home.php'</script>";
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
