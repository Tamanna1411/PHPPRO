<?php
	include ('dbcon.php');
?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $myusername = mysqli_real_escape_string($con,$_POST['UserName']);
      $mypassword = mysqli_real_escape_string($con,$_POST['Password']); 
      
      $sql = "SELECT ID FROM userlist WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: addpost.html");
      }else
		  {
         $error = "Your Login Name or Password is invalid";
          }
   }
?>
<!DOCTYPE html>
<html>
<head>
<title> Login page</title>
<link rel="stylesheet" type="text/css" href="loginpage.css">
</head>
<body id="back">
<div id="reg">
<div class="row">
<p id="log">Log In</p>
</div>
<fieldset id="field">
<form method="POST">
<div class="row">
<input type="text" id="username" name="username" Placeholder="username">
</div>
<div class="row">
<input type="text" id="password" name="password" Placeholder="password">
</div>
<div class="row">
<button name="go" id="button" onclick="window.location.href='file:///C:/xampp/htdocs/projects/addpost.html'">Submit</button>
</div>
<div>
<a href="Loginpage.html">Goback</a>
</div>
</form>
</fieldset>
</div>
</body>
</html>