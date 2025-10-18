
<?php
include("../connect/head.php");
$t_id = $_GET['t_id'];
?>

    <section class="content">
        <div class="container-fluid">
            <!-- Changelogs -->
            <div class="block-header">
                <h2>Chat Team Mate</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				
                    <div class="card">
					
					<div class="panel-heading">
                                                
												
													
													
													
													
                                                        <h4 class="media-heading">
                                                            <?php
                                                      $sql = "SELECT * FROM register WHERE id = '$t_id'";
														if($result = mysqli_query($db, $sql)){
															if(mysqli_num_rows($result) > 0){
																echo " ";
																while($row = mysqli_fetch_array($result)){
																   echo "<div class=\"media\">
                                                    <div class=\"media-left\">
                                                   
                                                            <img src=\"../../images/user.png\" width=\"20px\"/>
                                                        
                                                    </div>
                                                    <div class=\"media-body\">".$row['surname']." ".$row['fname']."
													</div>
                                                </div>
												<hr/>
													";
																} 
															
																mysqli_free_result($result);
															}
														   }
												?> 
                                                      
                                                    
                                           
                        <div class="header">
                          
						  <?php 

if(isset($_GET['edit'])) {
$dt=date("Y-m-d H:i:s");
$id = $_GET['id'];
$mess = $_GET['mess'];
$name = $_GET['name'];

  $sql1 = "INSERT INTO chat (date, id, t_id, sender, message)
VALUES ('$dt', '$id', '$t_id', '$name', '$mess')";
 if ($db->query($sql1) === TRUE) {

}else {
    echo "Error: " . $sql1 . "<br>" . $db->error;
    }
}
?>
						  
						  
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
						
						
						<?php
                                                      $sql = "SELECT * FROM chat WHERE id = '$id' AND t_id = '$t_id' OR t_id = '$id' AND id = '$t_id'";
														if($result = mysqli_query($db, $sql)){
															if(mysqli_num_rows($result) > 0){
																echo "";
																while($row = mysqli_fetch_array($result)){
																   echo "
                           <h2 class=\"card-inside-title\">
                                ".$row['sender']."
                                <small>".$row['message']."</small>
                            </h2>
							
							";
																} 
															
																mysqli_free_result($result);
															}
														   }
												?>
							<hr />
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
										<form action="" method="get">
										<input type="hidden" name="id" value="<?php echo $id; ?>">
										<input type="hidden" name="t_id" value="<?php echo $t_id; ?>">
										<input type="hidden" name="name" value="<?php
                                                      $sql = "SELECT * FROM register WHERE id = '$id'";
														if($result = mysqli_query($db, $sql)){
															if(mysqli_num_rows($result) > 0){
																echo "";
																while($row = mysqli_fetch_array($result)){
																   echo "".$row['surname']." ".$row['fname']."";
																} 
															
																mysqli_free_result($result);
															}
														   }
												?>">
										<textarea rows="4" name="mess" class="form-control no-resize" placeholder="Please type message here..."></textarea>
											 <button type="submit" name="edit" class="btn btn-danger">Send</button>
											</form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            
                        </div>
                    </div>
                </div>
            </div>
            
            
            
            
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>

</html>
