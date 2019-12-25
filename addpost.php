<?php
	include ('dbcon.php');
?>
<?php
if (isset($_POST['ID']))
{
 $Id = $_POST['ID'];
 $title = $_POST['Title'];
 $description = $_POST['Description'];
 $date = $_POST['Date'];
 $sql = "INSERT into postl(ID,Title,Description,Date) values ('$Id','$title','$description','$date')";
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
<title>Addpostpage</title>
<link rel="stylesheet" type="text/css" href="loginpage.css">
</head>
<body id="back">
<div class="center flex-container">
<div id="reg">
<div>
<h2 id="log">Post</h2>
</div>
<fieldset id="field">
<legend id="post">Add Post</legend>
<form method="POST">
<div class="row">
<label>Id</label>
<input type="number" id="Id" name="ID"  required>
</div>
<div class="row">
<label>Title</label>
<input type="text" id="title" name="Title">
</div>
<div class="row">
<label>Description</label>
<textarea name="Description"></textarea>
</div>
<div class="row">
<label>Date</label>
<input type="Date" id="date" name="Date">
</div>
<div class="row">
<button name="save" id="button" >Save</button>
</div>
</form>
</fieldset>
</div>
</div>
</body>
</html>