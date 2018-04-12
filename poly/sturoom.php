<?php include("config.php"); ?>
<?php include("header1.php"); ?>
 
  
             
                 
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header titlehms"><i class="fa fa-hand-o-right"></i>Rooms</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-info-circle fa-fw"></i> Hostel Room Information
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
<form class="form-horizontal" method="post">


                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-lg-4">
                                            <div class="form-group ">
                                                <label>Room No</label>
                                                <div class="input-group">

                                                    <span class="input-group-addon"><i class="fa fa-sort-numeric-asc"></i> </span>
                                                    <input type="text" placeholder="Room No" class="form-control" name="roomNo" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group ">
                                                <label>Number Of Seat</label>
                                                <div class="input-group">

                                                    <span class="input-group-addon"><i class="fa fa-info"></i> </span>
                                                    <input type="text" placeholder="No Of Seat" class="form-control" name="noOfSeat" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group ">
                                                <label>Block No</label>
                                                <div class="input-group">

                                                    <span class="input-group-addon"><i class="fa fa-sort-numeric-asc"></i> </span>
                                                    <input type="text" placeholder="Block No" class="form-control" name="blockId" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
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
                                        <div class="col-lg-5"></div>
                                        <div class="col-lg-2">
                                            <div class="form-group ">
                                                <button  name="Submit1" class="btn btn-primary">Submit</button>
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
