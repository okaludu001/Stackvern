<?php 
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

include("config.php");

if(isset($_POST['register'])) {
$dt=date("Y-m-d H:i:s");
$id = (rand(00000000000,99999999999));
$email = $_POST['email'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$state = $_POST['state'];
$dob = $_POST['dob'];
$surname = $_POST['surname'];
$fname = $_POST['fname'];
$pass = $_POST['password'];
$password = md5($pass);
$sql =  "SELECT sn FROM register WHERE email = '$email'" ;
$result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count > 0) {
                $error = "Sorry!.... E-mail entered has already been taken. <br/>
             Try Another Username Again..";
      }else {
  $sql1 = "INSERT INTO register (date, id, surname, fname, email, phone, country, state, gender, dob, password)
VALUES ('$dt', '$id', '$surname', '$fname', '$email', '$phone', '$country', '$state', '$gender',  '$dob', '$password')";
 if ($db->query($sql1) === TRUE) {

 header("location: registration_complete.php?id=$id");  

    
}else {
    echo "Error: " . $sql1 . "<br>" . $db->error;
    }
}
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign Up | Stackvern Digital</title>
    <!-- Favicon-->
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
<script type= "text/javascript" src = "countries.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body class="signup-page">
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);">Sign Up <b>Stackvern</b></a>

            <small>Stackvern Digital</small>
        </div>
		<div style = "color:#cc0000;" align="center"><?php 
							if (isset($_POST['register'])){
							echo $error; 
							}
							?></div>
        <div class="card">
            <div class="body">
                <form id="sign_up" method="post" action="">
                    <div class="msg">Register a new membership</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="surname" placeholder="Surname" required autofocus>
                        </div>
                    </div>
					<div class="input-group">
                        <span class="input-group-addon">
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="fname" placeholder="First Name" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                        </div>
                    </div>
					<div class="input-group">
                        <span class="input-group-addon">
                        </span>
                        <div class="form-line">
                            <input type="tel" class="form-control" name="phone" placeholder="Phone Number" required>
                        </div>
                    </div>
                    
					<div class="input-group">
                        <span class="input-group-addon">
                        </span>
                        <div class="form-line">
                            <input type="date" class="form-control" name="dob" placeholder="Date of Birth" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                        </span>
                        <div class="form-line">
                            <select class="form-control" name="gender"  required autofocus>
							
							<option value="">Select Gender</option>
							<option value="male">Male</option>
							<option value="Female">Female</option>
							</select>
                        </div>
                    </div>
					 <div class="input-group">
                        <span class="input-group-addon">
                        </span>
                        <div class="form-line">
									<select id="country" class="form-control" name ="country"></select> 
									
									  </div>
                    </div>
									 <div class="input-group">
                        <span class="input-group-addon">
                        </span>
                        <div class="form-line">
										<select name ="state" id ="state" class="form-control"></select>  </br>  <hr/>
										<script language="javascript">
										populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
									</script>
								  </div>
                    </div>
					<div class="input-group">
                        <span class="input-group-addon">
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Enter password" required autofocus>
                        </div>
                    </div>
					
					<div class="input-group">
                        <span class="input-group-addon">
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="cpassword" placeholder="Re-confirm Password" required autofocus>
                        </div>
                    </div>
					
					
                    <div class="form-group">
                        <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink" required>
                        <label for="terms">I read and agree to the <a href="javascript:void(0);">terms and Condition</a>.</label>
                    </div>

                    <button class="btn btn-block btn-lg bg-pink waves-effect" name="register" type="submit">REGISTER</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="../">You already have a membership?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>
    <script src="../js/pages/examples/sign-up.js"></script>
</body>

</html>