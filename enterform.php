<?php
session_start();
$value = $_SESSION['students'];

	$con = mysqli_connect('127.0.0.1','root','');

	if(!$con)
	{
		echo 'Not connected to server';
	}

	/*if(!$conn)
	{
		echo 'Not connected to server';
	}*/

	mysqli_select_db($con,"first");
	mysqli_select_db($con,"mysql");





	//$batch = $_POST['batch'];
	$year =$_POST['year'];
	$semester=$_POST['semester'];
	$academic=$_POST['academic'];
	//$section = $_POST['section'];
	//$semester = $_POST['semester'];
	//$student_name = $_POST['student_name'];
	//$student_regno = $_POST['student_registration'];
	$activity =$_POST['activity'];
	$date= $_POST['datefrom'];
	$dateto=$_POST['dateto'];
	$periods=$_POST['periods'];
	$places= $_POST['places'];
	$venue=$_POST['venue'];
	$events= $_POST['events'];
	$achievements=$_POST['achievements'];
	$proof = $_POST['proof'];
	$count=0;
	while($count<$value)
	{
		$reg = $_POST['student_registration['$count']'];
		echo $reg;
		$student_query = "SELECT * FROM person WHERE $reg  = student_regno";
		$student_data = mysqli_query($con,$student_query);
		while($data = mysqli_fetch_array($student_data))
		{
			$student_regno = $data['student_regno'];
			$student_name = $data['student_name'];
			$batch = $data['batch'];
			$section = $data['section'];
		}

	$sql = "INSERT INTO enterform (batch,year,section,semester,academic,student_name,student_regno,activity,datefrom,dateto,periods,places,venue,events,achievements,proof) VALUES
			('$batch','$year','$section','$semester','$academic','$student_name','$student_regno','$activity','$date','$dateto','$periods','$places','$venue','$events','$achievements','$proof')";
			$count++;

	if(!mysqli_query($con,$sql))
	{
		echo 'not inserted';
	}

	else
	{
		echo 'Details are entered in the database';
	}
}
	//header("refresh:2;url=enterform.html");
?>
