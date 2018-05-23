<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="form_border.css">

	<title>otherClassActivity</title>

  <div class="menu">
    <h1>CLASS ACTIVITY</h1>
    <div class="direction">
      <a href="report_generation.php">HOME</a>
      >>
      CLASS_ACTIVITY
    </div>
	</div>
</head>

<body>
<div class="box">
	<form method="post" action="displayClassActivity.php"  >
	<p>Batch:</p>

	<?php

		$con = mysqli_connect("localhost","root","","college_project");

		if(!$con)
		{
			echo "Server is not connected!";
		}

		$sql1 = "SELECT * FROM batch ORDER BY batch DESC";

		$result1 = mysqli_query($con,$sql1);
	?>
		<select name="batch" >
      <option value="None-selected">0000-0000</option>
	<?php
		while($data1 = mysqli_fetch_array($result1))
		{

	?>


		<option value="<?php echo $data1['batch']; ?>">
			<?php echo $data1['batch'];  ?>
		</option>

		<?php
	};
		?>



</select>
	<br>

	<hr align="left" width="100%"/>

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

	<label>Section:</label><br/>
    <input style="display:none;"type="radio" name="section"  value="" checked />
		<input  type="radio" name="section" value="A">A</input>
		<input  type="radio" name="section" value="B">B</input>
		<input type="radio" name="section" value="C">C</input><br/><hr align="left" width="100%"/>

	<input type="submit" value="Submit"></input>

</form>
</div>
<br>


</body>
</html>
