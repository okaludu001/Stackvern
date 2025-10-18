
<?php
include("../connect/head.php");
?>

    <section class="content">
        <div class="container-fluid">
            <!-- Changelogs -->
            <div class="block-header">
                <h2>Allocated Task</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				
                    <div class="card">
					
					<div class="panel-heading">
                                                
												
													
													
													
													
                                                        <h4 class="media-heading">
                                                            <?php
                                                      $sql = "SELECT * FROM task WHERE id ='$id'";
														if($result = mysqli_query($db, $sql)){
															if(mysqli_num_rows($result) > 0){
																echo " ";
																while($row = mysqli_fetch_array($result)){
																   echo "<a href=\"task.php?head=".$row['head']."&id=$id\"><div class=\"media\">
                                                    <div class=\"media-left\">
                                                   
                                                        
                                                    </div>
                                                    <div class=\"media-body\"><h2>".$row['head']."</h2>
													</div>
                                                </div>
													</a><hr/>
													";
																} 
															
																mysqli_free_result($result);
															}
														   }
												?> 
                                                      
                                                    
                                           
                        <div class="header">
                          
	
			  
						  
                            
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
