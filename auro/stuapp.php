<?php include("config.php"); ?>
<?php include("header1.php"); ?>
           
                 
<div id="page-wrapper">
        <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-info-circle fa-fw"></i> Admission
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
<form class="form-horizontal" method="post"  enctype="multipart/form-data">


                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="col-lg-4">
                                        <div class="form-group ">
                                            <label>Full Name</label>
                                            <div class="input-group">

                                                <span class="input-group-addon"><i class="fa fa-leaf"></i> </span>
                                                <input type="text" placeholder="Full Name" class="form-control" name="name" required>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4">
                                        <div class="form-group ">
                                            <label>Roll No</label>
                                            <div class="input-group">

                                                <span class="input-group-addon"><i class="fa fa-mobile-phone"></i> </span>
                                                <input type="text" placeholder="Mobile No" class="form-control" name="rollNo" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group ">
                                            <label>Email</label>
                                            <div class="input-group">

                                                <span class="input-group-addon"><i class="fa fa-envelope"></i> </span>
                                                <input type="email" placeholder="Email" class="form-control" name="email" required>
                                            </div>
                                        </div>
                                </div>
                           
                               
                              
                                                                 </div> </div>
                           
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="col-lg-4">
                                        <div class="form-group ">
                                            <label>Photo</label>
                                            <div class="input-group">

                                                <input type="file" class="form-control" name="file" required>
                                            </div>
                                        </div>

                                    </div>
                               
                               <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="form-control" name="gender" required>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>

                                            </select>
                                        </div>
                                    </div>
                                         <div class="col-lg-4">
                                        <div class="form-group ">
                                            <label>Date Of Birth</label>
                                            <div class="input-group date" id='dp1'>

                                                <span class="input-group-addon"><i class="fa fa-calendar"></i> </span>
                                                <input type="text" placeholder="Date Of Birth" class="form-control datepicker" name="dob" required  data-date-format="dd/mm/yyyy">
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Blood Group</label>
                                            <select class="form-control" name="bloodGroup" required>

                                                         <option value="A(+)">A(+)</option>
                                                         <option value="A(-)">A(-)</option>
                                                        <option value="A(un)">A(unknown)</option>
                                                        <option value="B(+)">B(+)</option>
                                                <option value="B(-)">B(-)</option>
                                                <option value="B(un)">B(unknown)</option>
                                                <option value="AB(+)">AB(+)</option>
                                                <option value="AB(-)">AB(-)</option>
                                                <option value="AB(un)">AB(unknown)</option>
                                                <option value="O(+)">O(+)</option>
                                                <option value="O(-)">O(-)</option>
                                                <option value="O(un)">O(unknown)</option>
                                                         <option value="un">Unknown</option>

                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group ">
                                            <label>Nationality</label>
                                            <div class="input-group">

                                                <span class="input-group-addon"><i class="fa fa-info"></i> </span>
                                                <input type="text" placeholder="Nationality" class="form-control" name="nationality" required>
                                            </div>
                                        </div>
                                    </div>
                                 <div class="col-lg-4">
                                        <div class="form-group ">
                                            <label>Cell No</label>
                                            <div class="input-group">

                                                <span class="input-group-addon"><i class="fa fa-mobile-phone"></i> </span>
                                                <input type="text" placeholder="Mobile No" class="form-control" name="cellNo" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                   
                                    <div class="col-lg-4">
                                        <div class="form-group ">
                                            <label>Father Name</label>
                                            <div class="input-group">

                                                <span class="input-group-addon"><i class="fa fa-leaf"></i> </span>
                                                <input type="text" placeholder="Father Name" class="form-control" name="fatherName" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group ">
                                            <label>Father Cell No</label>
                                            <div class="input-group">

                                                <span class="input-group-addon"><i class="fa fa-mobile-phone"></i> </span>
                                                <input type="text" placeholder="Mobile No" class="form-control" name="fatherCellNo" required>
                                            </div>
                                        </div>
                                    </div>
                                            <div class="col-lg-4">
                                        <div class="form-group ">
                                            <label>Mother Name</label>
                                            <div class="input-group">

                                                <span class="input-group-addon"><i class="fa fa-leaf"></i> </span>
                                                <input type="text" placeholder="Mother Name" class="form-control" name="motherName" required>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                            
                                    <div class="col-lg-4">
                                        <div class="form-group ">
                                            <label>Mother Cell No</label>
                                            <div class="input-group">

                                                <span class="input-group-addon"><i class="fa fa-mobile-phone"></i> </span>
                                                <input type="text" placeholder="Mobile No" class="form-control" name="motherCellNo" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group ">
                                            <label>Local Guardian</label>
                                            <div class="input-group">

                                                <span class="input-group-addon"><i class="fa fa-leaf"></i> </span>
                                                <input type="text" placeholder="Guardian Name" class="form-control" name="localGuardian" required>
                                            </div>
                                        </div>
                                    </div>
                                           <div class="col-lg-4">
                                        <div class="form-group ">
                                            <label>Local Guardian Cell No</label>
                                            <div class="input-group">

                                                <span class="input-group-addon"><i class="fa fa-mobile-phone"></i> </span>
                                                <input type="text" placeholder="Mobile No" class="form-control" name="localGuardianCell" required>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                             
                                    <div class="col-lg-4">
                                        <div class="form-group ">
                                            <label>Present Address</label>
                                            <div class="input-group">

                                                <span class="input-group-addon"><i class="fa fa-road"></i> </span>
                                                <textarea rows="3" placeholder="Address" class="form-control" name="presentAddress" required> </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group ">
                                            <label>Parmanent Address</label>
                                            <div class="input-group">

                                                <span class="input-group-addon"><i class="fa fa-road"></i> </span>
                                                <textarea rows="3" placeholder="Parmanent Address" class="form-control" name="parmanentAddress" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="row">
                                <div class="col-lg-12">
                                    <label id="lblmsg" class="red"></label>
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
                  

  <?php include("footer.php"); ?>
  <script type="text/javascript">
    $( document ).ready(function() {

        $('.datepicker').datepicker();

    });



</script>
