<?php include("config.php"); ?>
<?php include("header1.php"); ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header titlehms">Notice Board</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-info-circle fa-fw"></i> Hostel Notice Information
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form name="notice" method="post" enctype="multipart/form-data">


                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-lg-4">
                                            <div class="form-group ">
                                                <label>Title</label>
                                                <div class="input-group">

                                                    <span class="input-group-addon"><i class="fa fa-info"></i> </span>
                                                    <input type="text" placeholder="Notice Title" class="form-control" name="title" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group ">
                                                <label>Description</label>
                                                <div class="input-group">

                                                    <span class="input-group-addon"><i class="fa fa-info"></i> </span>
                                                    <textarea rows="1" placeholder="Description" class="form-control" name="description" required></textarea>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="col-lg-2">
                                            <div class="form-group ">
                                                <button type="submit" class="btn btn-success" name="btnSave" ><i class="fa fa-2x fa-check"></i>Save</button>
                                            </div>

                                        </div>
                                        <div class="col-lg-7">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <?php
		  if(isset($_POST["btnSave"]))
		  {
		$uname1=$_POST['title'];
		$uname2=$_POST['description'];
		$dateNow=date("Y-m-d H:i:s");
	
	 		$sql="INSERT INTO notice(title, description, createdDate) VALUES ('$uname1','$uname2','$dateNow')";
 mysql_query($sql);
echo "You have updated:";
}
else
{
echo "enter the values";

		  }
		  ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <hr />
                            
                        </div>
                    </div>


                </div>
                <!-- /.panel-body -->
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>

</div>


<script type="text/javascript">
    $( document ).ready(function() {



        $('#roomList').dataTable();
    });



</script>
              
  
  
  <?php include("footer.php"); ?>
