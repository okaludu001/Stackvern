<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
   $code = (rand(00000000000,99999999999));
    $ip = gethostbyname("www.google.com");  
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$dt=date("Y-m-d H:i:s");
   $status = ("Online");
      // username and password sent from form 
      $username = mysqli_real_escape_string($db,$_POST['email']);
      $pass = mysqli_real_escape_string($db,$_POST['password']);
$password = md5($pass);
      $sql = "SELECT id FROM register WHERE email = '$username' AND password = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count > 0) {
	  $id = "" . $row["id"]. "";
         $id = "" . $row["id"]. "";
$sql1 = "INSERT INTO login (date, code, id, ip, browser, status)
VALUES ('$dt', '$code', '$id', '$ip', '$browserAgent', '$status')";
 if ($db->query($sql1) === TRUE) {
         header("location: dashboard/?id=$id");
	  }
	  }else{
	 
	  }
   }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | Stackvern Digital</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
	<style>
  body {
    font-family: Arial, sans-serif;
    background: #f4f4f4;
    padding: 30px;
  }

  form {
    background: #fff;
    padding: 20px 25px;
    border-radius: 10px;
    max-width: 400px;
    margin: auto;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  }

  input, select {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  label {
    font-weight: bold;
  }

  .error {
    color: red;
    font-size: 13px;
    margin-bottom: 10px;
  }

  button {
    width: 100%;
    padding: 10px;
    background: #0066ff;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
  }

  button:hover {
    background: #004ecc;
  }
</style>
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Sign In<b> Stackvern</b></a>
            <small>Stackvern Digital</small>
        </div>
		<div style = "color:#cc0000;" align="center"><?php 
							if (isset($_POST['login'])){
							echo "Inalid Email or Password"; 
							}
							?></div>
        <div class="card">
            <div class="body">
                
				
				
<form action="" method="post" novalidate>


  <label>Email Address</label>
  <input type="email" id="email" name="email" placeholder="Enter your email">
  <div id="emailError" class="error"></div>

  <label>Password</label>
  <input type="password" id="password" name="password" placeholder="Enter your password">
  <div id="passwordError" class="error"></div>

  <button type="submit" name="login">Login</button>
  
  
   <div class="m-t-25 m-b--5 align-center">
                        <a href="sign_up">Membership Registration!</a>
                    </div>
</form>

<script>
document.getElementById("myForm").addEventListener("submit", function(e) {
  e.preventDefault(); // Stop form from submitting

  // Get form values
  let email = document.getElementById("email").value.trim();
  let password = document.getElementById("password").value.trim();

  // Error elements
  let emailError = document.getElementById("emailError");
  let passwordError = document.getElementById("passwordError");

  // Clear previous errors
  emailError.textContent = "";
  passwordError.textContent = "";

  let valid = true;

  // Validate Email
  if (email === "") {
    emailError.textContent = "Please enter your email address.";
    valid = false;
  } else if (!/^[^ ]+@[^ ]+\.[a-z]{2,3}$/.test(email)) {
    emailError.textContent = "Please enter a valid email address.";
    valid = false;
  }

  // Validate Password
  if (password === "") {
    passwordError.textContent = "Please enter your password.";
    valid = false;
  } else if (password.length < 6) {
    passwordError.textContent = "Password must be at least 6 characters.";
    valid = false;
  }



});
</script>
				
				
				
				
				
				
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/examples/sign-in.js"></script>
</body>

</html>