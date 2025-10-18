
<?php
include("../connect/head.php");
?>

    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-3">
                    <div class="card profile-card">
                        <div class="profile-header">&nbsp;</div>
                        <div class="profile-body">
                            <div class="image-area">
                                <img src="../../images/user.png" alt="AdminBSB - Profile Image" />
                            </div>
                            <div class="content-area">
                                <h3><?php
                                                      $sql = "SELECT * FROM register WHERE id = '$id'";
														if($result = mysqli_query($db, $sql)){
															if(mysqli_num_rows($result) > 0){
																echo " ";
																while($row = mysqli_fetch_array($result)){
																   echo "".$row['surname']." ".$row['fname']."";
																} 
															
																mysqli_free_result($result);
															}
														   }
												?> </h3>
                                <p><?php
                                                      $sql = "SELECT * FROM register WHERE id = '$id'";
														if($result = mysqli_query($db, $sql)){
															if(mysqli_num_rows($result) > 0){
																echo " ";
																while($row = mysqli_fetch_array($result)){
																   echo "".$row['email']."";
																} 
															
																mysqli_free_result($result);
															}
														   }
												?></p>
                                <p><?php
                                                      $sql = "SELECT * FROM register WHERE id = '$id'";
														if($result = mysqli_query($db, $sql)){
															if(mysqli_num_rows($result) > 0){
																echo " ";
																while($row = mysqli_fetch_array($result)){
																   echo "".$row['phone']."";
																} 
															
																mysqli_free_result($result);
															}
														   }
												?></p>
                            </div>
                        </div>
                        <div class="profile-footer">
                            <ul>
                                <li>
                                    <span>Followers</span>
                                    <span>0</span>
                                </li>
                                <li>
                                    <span>Following</span>
                                    <span>0</span>
                                </li>
                                <li>
                                    <span>Friends</span>
                                    <span>0</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card card-about-me">
                        <div class="header">
                            <h2>ABOUT ME</h2>
                        </div>
                        <div class="body">
                            <ul>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">library_books</i>
                                       Date of Birth
                                    </div>
                                    <div class="content">
                                        <?php
                                                      $sql = "SELECT * FROM register WHERE id = '$id'";
														if($result = mysqli_query($db, $sql)){
															if(mysqli_num_rows($result) > 0){
																echo " ";
																while($row = mysqli_fetch_array($result)){
																   echo "".$row['dob']."";
																} 
															
																mysqli_free_result($result);
															}
														   }
												?>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">location_on</i>
                                        Location
                                    </div>
                                    <div class="content">
                                        <?php
                                                      $sql = "SELECT * FROM register WHERE id = '$id'";
														if($result = mysqli_query($db, $sql)){
															if(mysqli_num_rows($result) > 0){
																echo " ";
																while($row = mysqli_fetch_array($result)){
																   echo "".$row['state'].", ".$row['country']."";
																} 
															
																mysqli_free_result($result);
															}
														   }
												?>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">edit</i>
                                       Gender
                                    </div>
                                    <div class="content">
                                        <span class="label bg-teal"> <?php
                                                      $sql = "SELECT * FROM register WHERE id = '$id'";
														if($result = mysqli_query($db, $sql)){
															if(mysqli_num_rows($result) > 0){
																echo " ";
																while($row = mysqli_fetch_array($result)){
																   echo "".$row['gender']."";
																} 
															
																mysqli_free_result($result);
															}
														   }
												?></span>
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-9">
                    <div class="card">
                        <div class="body">
                            <div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                                    <li role="presentation"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab">Profile Settings</a></li>
                                    <li role="presentation"><a href="#change_password_settings" aria-controls="settings" role="tab" data-toggle="tab">Change Password</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="home">
                                        <div class="panel panel-default panel-post">
                                            <div class="panel-heading">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img src="../../images/user.png" />
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
													
													<?php						
if(isset($_GET['edit'])) {
$id = $_GET['id'];
$fname = $_GET['fname'];
$surname = $_GET['surname'];
$phone = $_GET['phone'];


              
$sql1 = "UPDATE register SET fname = '$fname', surname = '$surname', phone = '$phone' WHERE id = '$id'";
 if ($db->query($sql1) === TRUE) {

echo "<p style=\"color:#009900\">Profile Updated successfully</p>";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
 } 
  }
?>
													
													
													
													
                                                        <h4 class="media-heading">
                                                            <a href="#"><?php
                                                      $sql = "SELECT * FROM register WHERE id = '$id'";
														if($result = mysqli_query($db, $sql)){
															if(mysqli_num_rows($result) > 0){
																echo " ";
																while($row = mysqli_fetch_array($result)){
																   echo "".$row['surname']." ".$row['fname']."";
																} 
															
																mysqli_free_result($result);
															}
														   }
												?> </a>
                                                        </h4>
                                                        Registration Date - <?php
                                                      $sql = "SELECT * FROM register WHERE id = '$id'";
														if($result = mysqli_query($db, $sql)){
															if(mysqli_num_rows($result) > 0){
																echo " ";
																while($row = mysqli_fetch_array($result)){
																   echo "".$row['date']."";
																} 
															
																mysqli_free_result($result);
															}
														   }
												?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <div class="post">
                                                    <div class="post-heading">
                                                        <p>I am a very happy to be here. I am good at containing <a href="#">#small</a> bits of <a href="#">#information</a>. I require little more information to use effectively.</p>
                                                    </div>
                                                    <div class="post-content">
                                                        <img src="../../images/profile-post-image.jpg" class="img-responsive" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="material-icons">thumb_up</i>
                                                            <span>12 Likes</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="material-icons">comment</i>
                                                            <span>5 Comments</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="material-icons">share</i>
                                                            <span>Share</span>
                                                        </a>
                                                    </li>
                                                </ul>

                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="Type a comment" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        
										
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in" id="profile_settings">
                                        <form class="form-horizontal" action="" method="get">
										<input type="hidden" name="id" value="<?php echo $id; ?>">
                                            <div class="form-group">
                                                <label for="NameSurname" class="col-sm-2 control-label">Name Surname</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" alt="<?php
                                                      $sql = "SELECT * FROM register WHERE id = '$id'";
														if($result = mysqli_query($db, $sql)){
															if(mysqli_num_rows($result) > 0){
																echo "";
																while($row = mysqli_fetch_array($result)){
																   echo "".$row['surname']."";
																} 
															
																mysqli_free_result($result);
															}
														   }
												?>" id="NameSurname" name="surname" placeholder="Name Surname" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Email" class="col-sm-2 control-label">First Name</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" alt="<?php
                                                      $sql = "SELECT * FROM register WHERE id = '$id'";
														if($result = mysqli_query($db, $sql)){
															if(mysqli_num_rows($result) > 0){
																echo "";
																while($row = mysqli_fetch_array($result)){
																   echo "".$row['fname']."";
																} 
															
																mysqli_free_result($result);
															}
														   }
												?>" name="fname" placeholder="First Name">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="InputSkills" class="col-sm-2 control-label">Phone Number</label>

                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="InputSkills" name="phone" placeholder="Update Phone number" alt="<?php
                                                      $sql = "SELECT * FROM register WHERE id = '$id'";
														if($result = mysqli_query($db, $sql)){
															if(mysqli_num_rows($result) > 0){
																echo "";
																while($row = mysqli_fetch_array($result)){
																   echo "".$row['phone']."";
																} 
															
																mysqli_free_result($result);
															}
														   }
												?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <input type="checkbox" id="terms_condition_check" class="chk-col-red filled-in" required/>
                                                    <label for="terms_condition_check">I agree to the <a href="#">terms and conditions</a></label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" name="edit" class="btn btn-danger">SUBMIT</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in" id="change_password_settings">
                                        <form class="form-horizontal">
										<h2>Contact the Support to change password</h2>
                                            <div class="form-group">
                                                <label for="OldPassword" class="col-sm-3 control-label">Old Password</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="OldPassword" name="OldPassword" placeholder="Old Password" disabled="disabled">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NewPassword" class="col-sm-3 control-label">New Password</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="NewPassword" name="NewPassword" placeholder="New Password" disabled="disabled">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NewPasswordConfirm" class="col-sm-3 control-label">New Password (Confirm)</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="NewPasswordConfirm" name="NewPasswordConfirm" placeholder="New Password (Confirm)" disabled="disabled">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <button type="submit" class="btn btn-danger" disabled="disabled">SUBMIT</button>
                                                </div>
                                            </div>
                                        </form>
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
    <script src="../../js/pages/examples/profile.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>

</html>
