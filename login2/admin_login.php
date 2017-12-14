<?php
   include("db_config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM login WHERE username = '$myusername' and passcode = '$mypassword' and role='admin'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
		 $_SESSION['myusername'];
         $_SESSION['login_user'] = $myusername;
         header("location: admin_welcome.php");
      }
	  else
        echo '<script language="javascript">';
		echo 'alert("Wrong Username Or Paassword")';
		echo '</script>';
   
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Smart Water Distribution</title>
	<!-- core CSS -->
	<link href="css/mycss.css" rel="stylesheet">
	<link rel="shortcut icon" href="images/icon.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
	<script src="js/slide.js"></script>
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
	</head>

<body>
			<?php include("navbar.php")?>
<br>
<div class="container bg-warning">
	<div class="row">	
		<form method="POST" class="modal-content animate" action="">
		   <div class="imgcontainer">
			  <img src="images/avatar.png" alt="Avatar" class="avatar">
			</div>

			<div class="container">
			  <label><b>Username</b></label>
			  <input type="text" placeholder="Enter Username" name="username" required>

			  <label><b>Password</b></label>
			  <input type="password" placeholder="Enter Password" name="password" required>
				
			  <button class="btn2" type="submit">Login</button><br>
			  <input type="checkbox" checked="checked"> Remember me
			</div>

			<div class="container">
			  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
			  <span class="psw">Forgot <a href="#">password?</a></span>
			</div>
		  </form>
	</div>
</div>
<!--End Body-->
</div>
</body>
</html>
 <?php include("footer.php")?>