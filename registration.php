<?php
	include ('dbcon.php');
?>
<?php
if (isset($_POST['ID']))
{
 $Id = $_POST['ID'];
 $username = $_POST['UserName'];
 $password = $_POST['Password'];
 $email = $_POST['Email'];
 $fname = $_POST['fullName'];
 $phone = $_POST['PhoneNo'];
 $admin = $_POST['IsAdmin'];
 $sql = "INSERT into userlist(ID,UserName,Password,Email,fullName,PhoneNo,IsAdmin) values ('$Id','$username', '$password', '$email', '$fname', '$phone',
 '$admin')";
mysqli_query($con,$sql);
echo "Save Success";
}
else
{
if (mysqli_error($con)) 
{
die(mysqli_error($con));
}
else
{
	echo "Save Success";
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title> Registration page</title>
<link rel="stylesheet" type="text/css" href="loginpage.css">
</head>
<body id="back">
<div class="center flex-container">
<div id="reg">
<div class="row">
<p id="log">Registration Form</p>
</div>
<fieldset id="field">
<form method="POST">
<div>
<div class="row">
<label>Id</label>
<input type="number" id="Id" name="ID"  required>
</div>
<div class="row">
<label>Username</label>
<input type="text" id="Username" name="UserName"  required>
</div>
<div class="row">
<label>Password</label>
<input type="text" id="password" name="Password"  required>
</div>
<div class="row">
<label>Email</label>
<input type="text" id="email" name="Email"  required>
</div>
<div class="row">
<label>Full_name</label>
<input type="text" id="fname" name="fullName"  required>
</div>
<div class="row">
<label>Phone no</label>
<input type="text" id="phone" name="PhoneNo"  required>
</div>
<div class="row">
<label>Is_Admin</label>
<input type="checkbox" id="admin" name="IsAdmin" value="yes"  required>yes
<input type="checkbox" id="admin" name="IsAdmin" value="No"  >No
</div>
<div class="row">
<button name="go" id="button" >Submit</button>
</div>
<div>
<a href="Loginpage.html">Goback</a>
</div>
</div>
</form>
</fieldset>
</div>
</div>
</body>
</html>