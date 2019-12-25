<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: login.php");
   }
?>
<!DOCTYPE html>
<html>
<head>
<title> Logout page</title>
<link rel="stylesheet" type="text/css" href="loginpage.css">
</head>
<body id="back">
<h2>Logout From Page</h2>
</body>
</html>