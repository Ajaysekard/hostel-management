<?php include("config.php"); ?>
<?php include("header1.php"); ?>
<?php 

   


?>
    
             
                 
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header titlehms">Rooms Alottments</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-info-circle fa-fw"></i> Rooms Alottments
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
                                         
 <?php
    $query = "select * from studentde";
    $results = mysql_query($query);
    while ($rows = mysql_fetch_assoc(@$results)){ 
    ?>
   <option value="<?php echo $rows['uname'];?>"><?php echo $rows['uname'];?></option>
    <?php
    } 
    ?>
                                        </select>
                                    </div>
                                </div>
                                        <div class="col-lg-4">
                                            <div class="form-group ">
                                                <label>Room No</label>
                                                <div class="input-group">

                                                    <span class="input-group-addon"><i class="fa fa-sort-numeric-asc"></i> </span>
                                                     <select class="form-control" name="roomNo1" required >
                                         
 <?php
    $query = "select * from wrooms";
    $results = mysql_query($query);
    while ($rows = mysql_fetch_assoc(@$results)){ 
    ?>
   <option value="<?php echo $rows['roomNo'];?>"><?php echo $rows['roomNo'];?></option>
   
    <?php
    } 
    ?>
                                        </select>
                                            
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group ">
                                                <label>Number Of Seat</label>
                                                <div class="input-group">

                                                    <span class="input-group-addon"><i class="fa fa-info"></i> </span>
                                                    <select class="form-control" name="noOfSeat" required >
                                         
 <?php
    $query = "select * from wrooms";
    $results = mysql_query($query);
    while ($rows = mysql_fetch_assoc(@$results)){ 
    ?>
   <option value="<?php echo $rows['noOfSeat'];?>"><?php echo $rows['noOfSeat'];?></option>
   
    <?php
    } 
    ?>
                                        </select>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group ">
                                                <label>Block No</label>
                                                <div class="input-group">

                                                    <span class="input-group-addon"><i class="fa fa-sort-numeric-asc"></i> </span>
                                                    <select class="form-control" name="blockId" required >
                                         
 <?php
    $query = "select * from wrooms";
    $results = mysql_query($query);
    while ($rows = mysql_fetch_assoc(@$results)){ 
    ?>
   <option value="<?php echo $rows['blockId'];?>"><?php echo $rows['blockId'];?></option>
   
    <?php
    } 
    ?>
                                        </select>
                                                    
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
		$uname1=$_POST['person'];
		$uname2=$_POST['roomNo1'];
		$uname3=$_POST['noOfSeat'];
		$uname4=$_POST['blockId'];
		$uname5=$_POST['description'];
		$sql="insert into roomset(Uname,roomNo,blockId,noOfSeat,description) values('$uname1','$uname2','$uname4','$uname3','$uname5')";
/*$sql="INSERT INTO roomset(uname,roomNo,blockId,noOfSeat,description) VALUES ('$uname1','$uname2','$uname4','$uname3,'$uname5')";*/
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
