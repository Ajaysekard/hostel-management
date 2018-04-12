<?php include("config.php"); ?>
<?php include("header1.php"); ?>
    <div id="facilities" class="content-section">
       
         
            <div class="row">
                              <div class="col-sm-10">
             
                 
<div id="page-wrapper">
        <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-info-circle fa-fw"></i> Student Details
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="row">
                        <div class="table-responsive">
                                <table id="studentList" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                        <th>Roomid</th>
                                            <th>Boom No</th>
                                            <th>Block NO</th>
                                            <th>No of Seats</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php
 $sql="SELECT * FROM wrooms";
 $result_set=mysql_query($sql);
 while($row=mysql_fetch_array($result_set))
 {
  ?>
                <tr>
        <td><?php echo $row[0] ?></td>
        <td><?php echo $row[1] ?></td>
        <td><?php echo $row[2] ?></td>
        <td><?php echo $row[3] ?></td>
        
      
         

        </tr>

          <?php
 }
 ?>
                                </table>
                            </div>';
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                         
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
     <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                 
                    
                </div> 
            </div> <!-- /.row -->
            </div>
  <?php include("footer.php"); ?>
