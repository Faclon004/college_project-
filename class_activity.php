<?php
session_start();
$flag = 0;
 ?>

 <!doctype html>
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
   	 height: 130px;
   	 margin:auto;
   	 margin-top: 5px;
   	 text-align: center;
   	 font-family: verdana;
   	 font-size: 15px;
   	 font-weight: bold;
   	 border-radius: 5px;
   	 color: white;

    }

    h1{
      text-align: center;
    }
   	h3{
       text-align:left;
       margin-left: 10px;
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
   b{
     color: black;
   }


   table{
 		border:1;
 		width:100%;
 		border-color:#000080;
 		background-color: white;
 	}

   td{
     background-color: grey;
     color:black;
   }

    th{
      color:black;
    }



    a{
      color:black;
      text-decoration: none;
    }

 	a:hover{

 		text-decoration:none;
 	}

  body{
		font-family: sans-serif;
		background-image: url("img/dark.jpg");
		background-size: cover;
		background-repeat: no-repeat;
	}






   </style>

   <?php
   if($_POST['batch'] == "None-selected" || $_POST['year'] == "None-selected" || $_POST['semester'] == "None-selected" || $_POST['section'] == NULL)
   {
     ?>

     <div class="message">
       Input field cannot left empty!
     </div>

     <?php
     header("refresh:3;url=activity_form2.php");
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
   			header("refresh:3;url=activity_form2.php");
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
   			header("refresh:3;url=activity_form2.php");

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
   			header("refresh:3;url=activity_form2.php");

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
   			header("refresh:3;url=activity_form2.php");

   		}
   		break;


   	}
   }


   if($flag > 0)
    {
     $batch = $_POST['batch'];
     $semester = $_POST['semester'];

   $con = mysqli_connect("localhost","root","","college_project");

   $mysql1 = "SELECT * FROM od_details WHERE $semester = semester and '$batch' = batch ORDER by student_registration_number";

   $mysql2 = mysqli_query($con,$mysql1);

   if(mysqli_fetch_array($mysql2)==0)
   {
     ?>
     <div class="message">
       No Record found!
     </div>
     <?php
      header("refresh:2;url=activity_form2.php");
      mysqli_close($con);
   }





   else {



   ?>

   <div class="head">

   <h1>Report of a class</h1>


  		<h3>
  			<a href="homepage.php">HOME</a>
  			>>
  			<a href="activity_form2.php">CLASS ACTIVITY</a>
        >>
        REPORT OF A CLASS

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
 </head>
 <body>

   <?php
      $year=$_POST['year'];
      $semester=$_POST['semester'];
      $section=$_POST['section'];
      $batch=$_POST['batch'];

    ?>
    <br>
    <div class="box">
      <b>BATCH: </b><?php echo $_POST['batch']; ?>
      <br><br>
      <b>YEAR:</b> <?php echo $year; ?>
      <br><br>
      <b>SEMESTER:</b> <?php echo $semester; ?>
      <br><br>
      <b>SECTION:</b> <?php echo $section; ?>

    </div>
    <br>


    <a style="font-family:impact;font-size:20px;width:auto;height:20px;background:black; color:white;"href="class_export.php">
      Export to excel
    </a>
    <br>
    <br>
    <table border="1">
      <tr>
      <td>S.No</td>
      <td>Registration Number</td>
      <td>Name</td>
      <td>Academic year</td>
      <td>Place</td>
      <td>Venue</td>
      <td>From</td>
      <td>To</td>
      <td>Activity</td>
      <td>Event</td>
      <td>Achievement</td>
      <td>Proof</td>
      <td>Periods</td>
    </tr>
<?php

$con = mysqli_connect("localhost","root","","college_project");
if(!$con)
{
  echo "Not connected to server";
}




$sql1 = "SELECT * FROM od_details WHERE $semester = semester and '$batch'= batch AND section = '$section'
         ORDER by student_registration_number";

$sql2 = mysqli_query($con,$sql1);
$count=0;
while($sql3= mysqli_fetch_array($sql2))
{

      echo "<tr>";
      echo "<th>" . ++$count ."</th>";
      echo "<th>" . $sql3['student_registration_number'] ."</th>";
      echo "<th>" . $sql3['student_name'] ."</th>";
      echo "<th>" . $sql3['academic_year'] . "</th>";
      echo "<th>" . $sql3['place'] ."</th>";
      echo "<th>" . $sql3['venue'] ."</th>";
      echo "<th>" . $sql3['from_date'] ."</th>";
      echo "<th>" . $sql3['to_date'] ."</th>";
      echo "<th>" . $sql3['activity'] ."</th>";
      echo "<th>" . $sql3['event'] ."</th>";
      echo "<th>" . $sql3['achievements'] ."</th>";
      echo "<th>" . $sql3['proof'] ."</th>";
      echo "<th>" . $sql3['periods']."</th>";
    echo "</tr>";


}
echo "</table>";
$_SESSION['year'] = $year;
$_SESSION['batch'] = $batch;
$_SESSION['semester'] = $semester;
$_SESSION['section'] = $section;
mysqli_close($con);
}
}


?>


</body>
</html>
