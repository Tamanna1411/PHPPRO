<?php
include ('dbcon.php');
   
?>

<!DOCTYPE html>
<html>
<head>
<title>Adminpostlistpage</title>
<link rel="stylesheet" type="text/css" href="loginpage.css">
</head>
<body id="back">
<div class="center flex-container">
<div id="reg">
<div>
<h2 id="log">List of page</h2>
</div>
<fieldset id="field2">
<legend id="post">post list</legend>
<table>
<tr>
<th>Sl</th>
<th>title</th>
<th>date</th>
<th>Author</th>
<th>Action</th>
<th>Approve</th>
</tr>
<tr>
<td>1</td>
<td>1st Post</td>
<td>18/12/19</td>
<td>Tamanna</td>
<td>
<a style="color:blue" href="postdetails.html">View</a>
<a style="color:blue" href="editpost.html">Edit</a>
<a style="color:blue" href="delete.html">Delete</a>
</td>
<td>
 <input type="checkbox">
</td>
<?php 
$sql = "SELECT * FROM postl";
$result = mysqli_query($con, $sql);  
 while($row = mysqli_fetch_assoc($result))
  {
      		$id = $row['ID'];
      		$title = $row['Title'];
      		$description = $row['Description'];
			$date= $row['Date'];
     
	?>
			<tr>
				<td><?php echo $id; ?></td>
				<td><?php echo $title; ?></td>
				<td><?php echo $description; ?></td>
				<td><?php echo $date; ?></td>
				<td>
				<a href="postdetails.html">View</a>
				<a href="editpost.html">Edit</a>
				</td>
			</tr>
		</tbody>
		
    <?php
     }
      ?>
</table>
</fieldset>
</div>
</div>
</body>
</html>