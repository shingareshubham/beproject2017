<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
</head>

<body>
<br>
<div class="container bg-warning">
  <h2 align="center">Welcome To The Water supply Department</h2>
  <ul class="nav nav-tabs bg-danger">
    <li class="active"><a data-toggle="tab" href="#home">About Admin</a></li>
    <li><a data-toggle="tab" href="#menu1">View Complain</a></li>
    <li><a data-toggle="tab" href="#menu2">View Schedule</a></li>
	<li><a data-toggle="tab" href="#menu3">Message To Operator</a></li>
	<li><a data-toggle="tab" href="#menu4">View Operator Message</a></li>
  </ul>

  <div class="tab-content bg-white">
  <!-- home -->
    <div id="home" class="tab-pane fade in active "><br/>

		<div class="row">
			<div class="col-md-3">
<pre class="modal-content animate">
<p align="center">
<?php 
$user_check = $_SESSION['login_user'];
$sql = "SELECT img FROM login where username = '$user_check'";
$sth = $db->query($sql);
$result=mysqli_fetch_array($sth);
echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['img'] ).'"/>';
?>
<br>
<?php 
$user_check = $_SESSION['login_user'];
$sql = "SELECT mobile FROM login where username = '$user_check'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " Mobile : " . $row["mobile"]; 
		"<br>";
    }
} else {
    echo "0 results";
}
?>
</p>
</pre>				
			</div>
			<div class="col-md-8">
<pre class="modal-content animate">
<?php 
$user_check = $_SESSION['login_user'];
$sql = "SELECT id FROM login where username = '$user_check'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " Id No: " . $row["id"]; 
		"<br>";
    }
} else {
    echo "0 results";
}
?>
<br>
<?php 
$user_check = $_SESSION['login_user'];
$sql = "SELECT username FROM login where username = '$user_check'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " User Name: " . $row["username"]; 
		"<br>";
    }
} else {
    echo "0 results";
}
?>
<br>
<?php 
$user_check = $_SESSION['login_user'];
$sql = "SELECT role FROM login where username = '$user_check'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " Role : " . $row["role"]; 
		"<br>";
    }
} else {
    echo "0 results";
}

?>
<br>
<?php 
$user_check = $_SESSION['login_user'];
$sql = "SELECT email FROM login where username = '$user_check'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " Email : " . $row["email"]; 
		"<br>";
    }
} else {
    echo "0 results";
}
?>
<br>
<?php 
$user_check = $_SESSION['login_user'];
$sql = "SELECT active FROM login where username = '$user_check'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " Active : " . $row["active"]; 
		"<br>";
    }
} else {
    echo "0 results";
}
?>
<br>
</pre>
			</div>
		</div>
			<!-- start container-->
	<!-- end container-->

	</div>
    <!-- menu 1-->
	<div id="menu1" class="tab-pane fade">
			<pre style="max-height:500px;" class="modal-content animate">
					<h2 align="center">User Complaint's</h2>
				    <table class="table table-bordered">
						  <thead>
							   <tr>
								<th width="2%"><font face="comic sans ms"><p align="center">Id</p></font></th>
								<th width="2%"><font face="comic sans ms"><p align="center">Name</p></font></th>
								<th width="2%"><font face="comic sans ms"><p align="center">Area</p></font></th>
								<th width="2%"><font face="comic sans ms"><p align="center">Email</p></font></th>
								<th width="2%"><font face="comic sans ms"><p align="center">Mobile</p></font></th>
								<th width="2%"><font face="comic sans ms"><p align="center">Message</p></font></th>

							  </tr>
						   </thead>
						<tbody>
					</pre>
						
						<?php
						#include("db_config.php");
						$q="select count(*) \"total\"  from complaint";
						$ros=mysqli_query($db,$q);
						$row=(mysqli_fetch_array($ros));
						$q="SELECT * FROM complaint";
						$ros=mysqli_query($db,$q);
						
						while($row=mysqli_fetch_array($ros))
						{
							echo '<tr>';
							echo '<td align=center>' . $row['id'];
							echo '<td align=center>' . $row['name'];
							echo '<td align=center>' . $row['area'];
							echo '<td align=center>' . $row['email'];
							echo '<td align=center>' . $row['mobile'];
							echo '<td align=center>' . $row['msg'];
							echo '</tr>';
							
						}
						echo '</table>';
						echo  '</tbody>';
						echo '<br/>';
						
					   
					?>
	</div>
	<!-- start menu 2-->
	 <div id="menu2" class="tab-pane fade">
	<pre style="max-height:500px;" class="modal-content animate">
					<h2 align="center">Water Supply Schedule</h2>
				    <table class="table table-bordered">
						  <thead>
							   <tr>
								<th width="2%"><font face="comic sans ms"><p align="center">Id</p></font></th>
								<th width="2%"><font face="comic sans ms"><p align="center">Area</p></font></th>
								<th width="2%"><font face="comic sans ms"><p align="center">Day</p></font></th>
								<th width="2%"><font face="comic sans ms"><p align="center">Time</p></font></th>
							  </tr>
						   </thead>
						<tbody>
					</pre>
						
						<?php
						#include("db_config.php");
						$q="select count(*) \"total\"  from schedule";
						$ros=mysqli_query($db,$q);
						$row=(mysqli_fetch_array($ros));
						$q="SELECT * FROM schedule";
						$ros=mysqli_query($db,$q);
						
						while($row=mysqli_fetch_array($ros))
						{
							echo '<tr>';
							echo '<td align=center>' . $row['id'];
							echo '<td align=center>' . $row['area'];
							echo '<td align=center>' . $row['days'];
							echo '<td align=center>' . $row['times'];
							echo '</tr>';
							
						}
						echo '</table>';
						echo  '</tbody>';
						echo '<br/>';
						
					   
					?>
    </div>
	<!-- start menu 3-->
    <div id="menu3" class="tab-pane fade">
	<form method="POST" class="modal-content animate" action="">
			<div class="container"><br>
			  <textarea type="text" placeholder="Send Message to Operator" rows="7" name="username" required></textarea>
			  <button class="btn2" type="submit">Send Message To Operator</button>
			  </div>
		  </form>
    </div>
	
	<!-- start menu 3-->
    <div id="menu4" class="tab-pane fade">
	<pre class="modal-content animate">
		
	</pre>
    </div>
	
  </div>
  <br />
</div>
</div>
<!--End Body-->
</body>
</html>
