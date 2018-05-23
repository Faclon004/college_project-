<?php
	session_start();

	$con = mysqli_connect('127.0.0.1','root','');
	if(!$con)
	{
		echo "Server not connected";
	}

	if(!mysqli_select_db($con,'first'))
	{
		echo "DB not selected";
	}

	$name=$_POST['student_regno'];
	//echo $name;
	$check="SELECT * FROM person where $number = student_regno";

	$result = mysqli_query($con,$check);
	$count=0;
	while($row=mysqli_fetch_array($result))
	{
/*$reg = $row['student_regno'];
		echo $reg;3
		if($reg==$name)
		{*/
			++$count;
			$reg_no=$row['student_regno'];
			$name=$row['student_name'];
			$batch=$row['batch'];
			$section=$row['section'];


			//break;
		//}

	}
	echo $count;
	if($count==1)
	{
		echo 'It exits';

		//header("refresh:1;url=enterform.html");
	}

	else
	{
		echo 'It doesnt exist';
		$_SESSION['reg_no']=null;
		$_SESSION['name']=null;
		$_SESSION['batch']=null;
		$_SESSION['section']=null;
		//header("refresh:1;url=enterform.html");
	}



?>
<!doctype html>
	<head>
		<title>view_form1</title>
		<div style="background-color:violet;color:yellow;>
		<!--hr size="2"/-->
		<h1 align="center"> Activites of a Student</h1>
		<!--hr size="2"/-->
		</div>
		<style>
			table,th,td{
					border: 1px solid black;
					padding:5px;
					}
			th{
				text-align:left;
				background-color:#e3e3e3;
				color:#333;
				}
		</style>
	</head>

	<body>

	<table style="width:100%">
			<tr>
				<th>Name</th>
				<td><?php
						 $student_name=$_SESSION['name'];
						 echo $student_name;
					?>

							</td>
			</tr>
			<tr>
				<th>Registration Number</th>
				<td><?php
							//$student_regno=$_SESSION['reg_no'];
						echo $regno;
					?></td>
			</tr>
			<tr>
				<th>Year</th>
				<td>3rd</td>
			</tr>

			<tr>
				<th>Semester</th>
				<td><?php
					//$semester=$_POST['semester'];
					echo $semester;
					?>
			<tr>
				<th>Section</th>
				<td><?php
							//$student_section=$_SESSION['section'];
						echo $section;
					?></td>
			</tr>
			<tr>
				<th col="3" rowspan="10" >OD details</th>
				<td>DATE</td>

				<td >Periods</td>
				<td >Activity</td>


			</tr>
			<!--tr>

			</tr-->
			<tr>

					<td>23/3</td>
					<td>123</td>
					<td>sym</td>
				</tr>


			<tr>

				<td>24/5</td>
				<td>345</td>
				<td>extra</td>
			</tr>


		</table>
	</body>
</html>
