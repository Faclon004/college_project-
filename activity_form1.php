<?php
session_start();
?>

<!doctype html>
<head>
	<link rel="stylesheet" href="form_border.css">
	<?php
	if (isset($_SESSION['username']))
	{ ?>
	<title>form3</title>


	<div class="menu">
    <h1>STUDENT ACTIVITY</h1>
		<div class="user">
		<?php
			echo $_SESSION['username'];
		 ?>

		 <div class="user-content">
			 <form method="post" action="firstpage.php">
				 <input style="
				 font-family:impact;
				 background:black;
				 color:white;
				 border:none;
				 font-size:20px;
				 cursor:pointer;
				 "type="submit" name="log_out" value="LOG OUT">
			 </form>
		 </div>
		 </div>
    <div class="direction">
      <a href="homepage.php">HOME</a>
      >
      STUDENT_ACTIVITY
    </div>
	</div>
</head>

<body >
<div class="box">
	 <form method="post" action="student_activity.php">



	<p>Student Registration number:</p>
		<input type="number" size="20" name="student_regno" required>
		<br/><hr align="left" width="100%"/>


	Year:<br>
	<select name="year">
		<option value="None-selected">0</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
	</select><br/><hr align="left" width="100%"/>

	Semester:<br>
	<select name="semester">
		<option value="None-selected">0</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
	</select>
		<br/><hr align="left" width="100%"/>
		<br>
		<br>



		<input type="submit" value="Submit"></input>
	</form>




</div>

<br>



 <?php
 }

 else
 {

  ?>
	<div class="message">
		Access denied!
	</div>
	<?php
	header("refresh:2;url=firstpage.php");
} ?>

</body>
</html>
