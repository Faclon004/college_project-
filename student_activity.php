<?php
session_start();
$flag = 0;
 ?>
<!doctype html>
<html>

<head>
<style>
.user{

  width: 180px;
  height: 25px;
  background-color: #FF6103;
  background: rgba(0, 0, 0, 0.7);
  float: right;
  margin:0 auto;
 margin-top: -35px;
  margin-right: 30px;


  color: white;
  text-align: center;
  border-radius: 20px;
  font-family: impact;
  border-bottom: 3px;
  border-bottom-style: solid;
  border-bottom-color: white;
  display: inline-block;
  position: relative;


}

.user-content
{
  display: none;
  width: 180px;
  height: 30px;
  border-radius:10px;
  border-bottom: solid;
  border-bottom-color: black;
  border-right: solid;
  background-color: black;
  float:right;


  text-align: center;
  text-shadow: solid;
  font-family: impact;
  font-weight: bold;
  color: white;
  font-size: 25px;
}

.user:hover{
  cursor: pointer;
  background: white;
  color: black;
  border-bottom-color: black;
}

.user:hover .user-content{
  display: block;
}

.head{
	 background-color: rgb(0, 204, 153);
	 background: rgba(0, 204, 153,0.5);
	 font-family: impact;
	 width: 100%;
	 height:100px;
	 color:white;

 }

 .box{
	 background-color: rgb(0, 153, 153);
	 background: rgba(0, 153, 153,0.5);
	 width: 40%;
	 height: 170px;
	 margin:auto;
	 margin-top: 5px;
	 text-align: center;
	 font-family: verdana;
	 font-size: 15px;
	 font-weight: bold;
	 border-radius: 5px;
	 color: white;

 }
	h3{
    text-align:left;
    margin-left: 10px;
  }

	table{
		border:1;
		width:100%;
		border-color:#000080;
		background-color: white;
	}

	td{
		background-color:grey;
		font-style:oblique;
		text-align: center;
	}

	body{
		font-family: sans-serif;
		background-image: url("img/dark.jpg");
		background-size: cover;
		background-repeat: no-repeat;
	}

	a{
    color:black;
    text-decoration: none;
  }

	a:hover{

		text-decoration:none;
	}

	.message
  {
    width:500px;
    height:30px;
    border-radius: 10px;
    border-style: solid;
    border-color: green;
    background-color: #9ACD32;
    color:white;
    text-align:center;
    font-family: sans-serif;

  }

	body{
		background-image: url("img/dark.jpg");
		background-size: cover;
		background-repeat: no-repeat;

	}

</style>

<?php
if($_POST['student_regno'] == NULL || $_POST['semester'] == "None-selected" || $_POST['year'] == "None-selected")
{
 ?>
 <div class="message">
	 Input field cannot left empty!
 </div>
 <?php
 header("refresh:2;url=report_generation.php");
}

else if($_POST['year'] != "None-selected")
{
	switch($_POST['year'])
	{


		case 1:
		if($_POST['semester'] == 1 || $_POST['semester'] == 2)
		{
			++$flag;
		}
		else
		{
			?>
			<div class="message">
				Semester can be 1 or 2 for the given year!
			</div>
			<?php
			header("refresh:3;url=activity_form1.php");
		}
		break;


		case 2:
		if($_POST['semester'] == 3 || $_POST['semester'] == 4)
		{
			++$flag;
		}
		else
		{
			?>
			<div class="message">
				Semester can be 3 or 4 for the given year!
			</div>
			<?php
			header("refresh:3;url=activity_form1.php");

		}
		break;


		case 3:
		if($_POST['semester'] == 5 || $_POST['semester'] == 6)
		{
			++$flag;
		}
		else
		{
			?>
			<div class="message">
				Semester can be 5 or 6 for the given year!
			</div>
			<?php
			header("refresh:3;url=activity_form1.php");

		}
		break;


		case 4:
		if($_POST['semester'] == 7 || $_POST['semester'] == 8)
		{
			++$flag;
		}
		else
		{
			?>
			<div class="message">
				Semester can be 7 or 8 for the given year!
			</div>
			<?php
			header("refresh:3;url=activity_form1.php");

		}
		break;


	}
}
if($flag > 0)
{

	?>
   <div class="head">
		<h1 align="center">
		Report of a student
		</h1>
		<h3 >
			<a href="homepage.php">HOME</a>
			>>
			<a href="activity_form1.php">STUDENT ACTIVITY</a>
			>>
			REPORT ON STUDENT

		</h3>
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
		</div>
		<br>







</head>

<body>
	<br>

<?php

	$con = mysqli_connect('127.0.0.1','root',"","college_project");





	$number=$_POST['student_regno'];
	//$name=$_POST['student_regno'];
	//echo $name;
	$check="SELECT * FROM student_detail where $number = student_registration_number ";

	$result = mysqli_query($con,$check);
	$count=0;
	while($row=mysqli_fetch_array($result))
	{

			++$count;
			$reg_no=$row['student_registration_number'];
			$name1=$row['student_name'];
			$batch=$row['batch'];
			$section=$row['section'];


	}

	if($count == 0)
	{
		?>
		<div class="message">
			No student with such registration number exist!
		</div>
		<?php
    header("refresh:2;url=homepage.php");

	}

	else
	{






?>
			<div class="box">
				<b style="color:black">Name:</b><?php
				echo $name1; ?>
				<br><br>
				<b style="color:black">Registration number:
				</b><?php echo $number; ?>
				<br><br>
				<b style="color:black">Year: </b><?php echo $_POST['year']; ?>
				<br><br>
				<b style="color:black">Semester:</b><?php  echo $_POST['semester']; ?>
				<br><br>
				<b style="color:black">Section:</b> <?php echo $section; ?>
				<br><br>
			</div>
      <a style="font-family:impact;font-size:20px;width:auto;height:20px;background:black; color:white;"href="student_export.php">
        Export to excel
      </a>
      <br><br>



<?php



			$year=$_POST['year'];
			$semester=$_POST['semester'];
			$number=$_POST['student_regno'];

			$tydata= "SELECT * FROM od_details WHERE $number=student_registration_number and $semester=semester" ;
			$ydata= mysqli_query($con,$tydata);
			if(mysqli_fetch_array($ydata)==0)
			{
				?>
				<div class="message">
					No record found!
				</div>
				<?php
        header("refresh:2;url=homepage.php");
			}

			else
			{
		echo "<table border=2>
			<tr>
			<td>S.No.</td>
			<td>Place</td>
			<td>Venue</td>
			<td>From</td>
			<td>To</td>
			<td>Activity</td>
			<td>Events</td>
			<td>Achievement</td>
			<td>Proof</td>
      <td>Periods</td>
			</tr>";

			$sydata= mysqli_query($con,$tydata);
			while($data=mysqli_fetch_array($sydata))
			{

				echo "<tr>";

					echo "<th>"; echo $count;  echo"</th>";
					echo "<th>" . $data['place'] . "</th>";
					echo "<th>" . $data['venue'] . "</th>";
					echo "<th>" . $data['from_date'] . "</th>";
					echo "<th>" . $data['to_date'] . "</th>";
					echo "<th>" .  $data['activity'] . "</th>";
					echo "<th>" . $data['event']  . "</th>";
					echo "<th>" .  $data['achievements'] . "</th>";
					echo "<th>" . $data['proof'] . "</th>";
          echo "<th>" . $data['periods'] . "</th>";
					echo "</tr>";
					++$count;



			}
		echo "</table>";
    $_SESSION['registration_number'] = $number;
    $_SESSION['semester'] = $semester;

		mysqli_close($con);
			}
	  }
	}
?>

</body>
</html>
