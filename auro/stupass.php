<?php include("config.php"); ?>
<?php include("header1.php"); ?>
   
                  <div class="col-sm-8">
             
                 
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header titlehms">outpass</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-info-circle fa-fw"></i> outpass
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
<form class="form-horizontal" method="post">


                                <div class="row">
                                    <div class="col-lg-12">
                                      <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Student Name</label>
                                        <select class="form-control" name="person" required>
                                            <?php echo $GLOBALS['output'];?>

                                        </select>
                                    </div>
                                </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-lg-5"></div>
                                        <div class="col-lg-2">
                                            <div class="form-group ">
                                                <button  name="outing" class="btn btn-primary">Outing</button>
                                            </div>

                                        </div>
                                           <div class="col-lg-2">
                                            <div class="form-group ">
                                                <button  name="Native" class="btn btn-primary">Native</button>
                                            </div>

                                        </div>
                                        <div class="col-lg-5">
                                        </div>
                                    </div>
                                </div>
                            </form>
<?php
		  if(isset($_POST["Submit1"]))
		  {
		$uname1=$_POST['roomNo'];
		$uname2=$_POST['noOfSeat'];
		$uname3=$_POST['blockId'];
		$uname4=$_POST['description'];
		
	 		$sql="INSERT INTO wrooms(`roomNo`, `blockId`, `noOfSeat`, `description`) VALUES ('$uname1','$uname3','$uname2','$uname4')";
 mysql_query($sql);
echo "You have updated:";
}
else
{
echo "enter the values";

		  }
		  ?>                   </div>
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
<!-- /#page-wrapper -->


<script type="text/javascript">
    $( document ).ready(function() {



        $('#roomList').dataTable();
    });



</script>
                   </ul>


                </div> 
              
    </div> <!-- /#products -->
</div>
  
  <?php include("footer.php"); ?>
