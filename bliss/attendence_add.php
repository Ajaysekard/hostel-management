<?php include("config.php"); ?>
<?php include("header1.php"); ?>
           
                 
<div id="page-wrapper">
        <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-info-circle fa-fw"></i> Attendence
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
<form class="form-horizontal" method="post"  enctype="multipart/form-data">


                            <div class="row">
                                           <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Student Name</label>
                                       

                                        <select class="form-control" name="person" required>
                                         
 <?php
    $query = "select * from roomset";
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
                        </form>
<?php
		  if(isset($_POST["Submit1"]))
		  {
		$u1=$_POST['name'];
		$u2=$_POST['rollNo'];
		$u3=$_POST['email'];
		$u4=$_POST['gender'];
		$u5=$_POST['dob'];
		$u6=$_POST['bloodGroup'];
		$u7=$_POST['nationality'];
		$u8=$_POST['cellNo'];
		$u9=$_POST['fatherName'];
		$u10=$_POST['motherName'];
		$u11=$_POST['fatherCellNo'];
		$u12=$_POST['motherCellNo'];
		$u13=$_POST['localGuardian'];
		$u14=$_POST['localGuardianCell'];
		$u15=$_POST['presentAddress'];
		$u16=$_POST['parmanentAddress'];
			$dateNow=date("Y-m-d H:i:s");
		$fl=$_FILES["file"]["name"];
        $dbfile=move_uploaded_file($_FILES["file"]["tmp_name"],
        "gallery/" . $_FILES["file"]["name"]);
 $sql="insert into studentde(uname,rollno,email,gender,dob,bloodGroup,nationality,cellno,fatherName,motherName,fatherCellNo,motherCellNo,localGuardian,localGuardianCell,presentAddress,parmanentAddress,perPhoto,admitDate) values ('$u1','$u2','$u3','$u4','$u5','$u6','$u7','$u8','$u9','$u10','$u11','$u12','$u13','$u14','$u15','$u16','$fl','$dateNow')";
	 		/*$sql="INSERT INTO studentde (`uname`, `cellNo`, `email`, `gender`, `dob`, `bloodGroup`, `nationality`, `passportNo`, `fatherName`, `motherName`, `fatherCellNo`, `motherCellNo`, `localGuardian`, `localGuardianCell`, `presentAddress`, `parmanentAddress`, `perPhoto`, `admitDate`) VALUES ('$u1','$u2','$u3','$u4','$u5','$u6','$u7','$u8','$u9','$u10','$u11','$u12','$u13','$u14','$u15','$u16','$fl');	*/
 mysql_query($sql);
echo "You have updated:";
}
else
{
echo "enter the values";

		  }
		  ?>                   
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
                  

  <?php include("footer.php"); ?>
  <script type="text/javascript">
    $( document ).ready(function() {

        $('.datepicker').datepicker();

    });



</script>
