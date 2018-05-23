<!doctype html>
<style>
.message
{
  width:300px;
  height:30px;
  border-radius: 10px;
  border-style: solid;
  border-color: green;
  background-color: #9ACD32;
  color:white;
  text-align:center;
  font-family: sans-serif;

};

.background
{
  background-color:#e3e3e3;
  width:1500px;
  height:1500px
}
</style>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college_project";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if(!$conn)
{
	echo "First connection failed";
}


$batch=$_POST['batch'];


$sql = "DELETE FROM student_detail where batch ='$batch'";
$sql1 = "DELETE FROM batch where batch = '$batch'";


if(mysqli_query($conn,$sql))
{
?>
<div class="background">
	<div class="message">
	Deleted from Student_detail Table!
	</div>
<?php
}
else
	{
	?>
	<div class="message">
		Not deleted from student_detail Table!
	</div>
	<?php
	}
?>
<br>
<?php
	if (mysqli_query($conn,$sql1))
	{
?>
	<div class="message">
		Deleted from batch table!
	</div>
	<?php
	}

else
 {
	 ?>
	 <div class="message">
	Not deleted from batch table!
		</div>
	<?php
}






$sql2 = "DELETE FROM od_details where batch = '$batch'";

?>
<br>
<?php
if (mysqli_query($conn,$sql2))
{
?>
	<div class="message">
	Whole batch has been deleted!
	</div>
	<?php
}

else
{
	?>
	<div class="message">
Whole batch has not deleted!
</div>
<?php
}

header("refresh:5;url=homepage.php");



?>
