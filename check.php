
<?php 
	session_start();
?>
<!doctype html>
<body>
<?php
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
	$check="SELECT student_regno,student_name,batch,section FROM person where $name = student_regno";
	
	$result = mysqli_query($con,$check);
	$count=0;
	while($row=mysqli_fetch_array($result))
	{
		$reg = $row['student_regno'];
		echo $reg;
		if($reg==$name)
		{
			++$count;
			$_SESSION['reg_no']=$row['student_regno'];
			$_SESSION['name']=$row['student_name'];
			$_SESSION['batch']=$row['batch'];
			$_SESSION['section']=$row['section'];
			break;
		}
	
	}
	echo $count;
	if($count==1)
	{
		echo 'It exits';
		header("refresh:1;url=enterform.html");
	}
	
	else
	{
		echo 'It doesnt exist';
		$_SESSION['reg_no']=null;
		$_SESSION['name']=null;
		$_SESSION['batch']=null;
		$_SESSION['section']=null;
		header("refresh:1;url=enterform.html");
	}
	
	
	
?>
</body>
</html>