<!doctype html>
<head>
	<link rel="stylesheet" href="form_border.css">
	<title>User Credentials</title>


	<div class="menu">
    <h1>Enter the details</h1>
    <div class="direction">
      <a href="firstpage.php">HOME</a>
      >
      User credentials
    </div>
	</div>
</head>

<body >
<div class="box">
	 <form method="post" action="otherUser.php">



	<p>FACULTY NAME:</p>
		<input type="text" size="20" name="facultyName" required></input>
		<br/><hr align="left" width="100%"/>


	Purpose:<br>
  <input type="text" size="50" name="purpose" required></input>
	<br/><hr align="left" width="100%"/>
		<br>
		<br>



		<input type="submit" value="Submit" name="submit"></input>
	</form>

  <?php
  if(isset($_POST['submit']))
  {
    date_default_timezone_set("Asia/Calcutta");
    $facultyName = $_POST['facultyName'];
    $purpose = $_POST['purpose'];
    $date = date("F j, Y");
    $time = date("g:i a");
    $con = mysqli_connect("localhost","root","","college_project");
    $query = "INSERT INTO other_user (FacultyName,Purpose,Time_of_access,Date) VALUES
              ('$facultyName','$purpose','$time','$date')";
    if(mysqli_query($con,$query)){
      echo "Thanks for your co-operation!";
      header("refresh:2;url=report_generation.php");
    }
    else{
      echo "Enter the details correctly";
    }
  } ?>



</div>


<br>





</body>
</html>
