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
   height: 150px;
   margin:auto;
   margin-top: 10px;
   text-align: center;
   font-family: verdana;
   font-size: 15px;
   font-weight: bold;
   border-radius: 5px;
   color: white;

 }

 table{
   background-color: white;
   background: white;
   width:100%;
   font-family: sans-serif;

   border-spacing: inherit;

 }

 th,td{

   border-style:solid;
   border-color: black;

 }



 h1{
   text-align: center;
 }

 h3{
   text-align:left;
   margin-left: 10px;
 }

 a{
   color:black;
   text-decoration: none;
 }

 a:hover{
   text-decoration: none;
 }

 body{
   background-image: url("img/dark.jpg");
   background-size: cover;

 }


 </style>

 <?php
 if($_POST['year'] == NULL ||  $_POST['academic_year'] == "None-selected" || $_POST['semester'] == "")
 {
   ?>
   <div class="message">
     Input field cannot left empty!
   </div>
   <?php
   header("refresh:2;url=report.php");
 }

 else
 {
   $academic = $_POST['academic_year'];
   $year = $_POST['year'];
   $sem = $_POST['semester'];
   switch($year)
   {
     case 1:
     if($sem == 'even')
     {
       $semester = 2;
     }
     else
     {
       $semester = 1;
     }
     break;

     case 2:
     if($sem == 'even')
     {
       $semester = 4;
     }
     else
     {
       $semester = 3;
     }
     break;

     case 3:
     if($sem == 'even')
     {
       $semester = 6;
     }
     else
     {
       $semester = 5;
     }
     break;

     case 4:
     if($sem == 'even')
     {
       $semester = 8;
     }
     else
     {
       $semester = 7;
     }
     break;


   }
   $count=0;



   $con = mysqli_connect("localhost","root","","college_project");

   if(!$con)
   echo "Not connected to server!";

   $sql = "SELECT * FROM od_details WHERE academic_year = '$academic' AND year = $year AND semester = $semester
           ORDER BY student_registration_number";

   $result = mysqli_query($con,$sql);
   $result1 = mysqli_query($con,$sql);

   if(mysqli_fetch_array($result1)==0)
   {
     ?>
     <div class="message">
       No record found!
     </div>
     <?php
     header("refresh:2;url=report.php");
   }

   else
   {


   ?>
    <div class="head">
   <h1>REPORT BY YEAR!</h1>
   <h3><a href="report_generation.php">HOME</a>
     >>
      <a href="otherReport.php">REPORT</a>
     >>
     REPORT BY YEAR</h3>
   </div>

   <div class="box">
     <div style="color:black; font-size;20px; ">Acamedic Year:</div>  <?php echo $academic; ?>
     <br>
     <br>


     <div style="color:black; font-size;20px;">Year:</div>
      <?php
      if($year==1)
      {
      $re='st';
      }
      else if($year==2)
      {
      $re='nd';
      }
      else if($year==3)
      {
      $re='rd';
      }
      else
      {
      $re='th';
      }
     echo $year;
     echo $re;
     ?>

   <br>
   <br>

   <div style="color:black; font-size;20px;">Semester:</div>  <?php echo $sem; ?>
 </div>
 <br>
 <br>
 <a style="font-family:impact;font-size:20px;width:auto;height:20px;background:black; color:white;"href="year_export.php">
   Export to excel
 </a>
 <br>
 <br>

   <table>

     <tr>
       <th>S.no</th>
       <th>Name</th>
       <th>Year</th>
       <th>Sem</th>
       <th>Section</th>
       <th>Activity</th>
       <th>Event</th>
       <th>Place</th>
       <th>Venue</th>
       <th>From</th>
       <th>To</th>
       <th>Periods</th>
      </tr>

      <?php
      while($data = mysqli_fetch_array($result))
      {

        ?>
            <tr>
            <td> <?php echo ++$count; ?></td>
            <td> <?php echo $data['student_name'];?> </td>
            <td> <?php echo $data['year']; ?></td>
            <td> <?php echo $data['semester']; ?></td>
            <td> <?php echo $data['section']; ?></td>
            <td> <?php echo $data['activity']; ?></td>
            <td> <?php echo $data['event']; ?></td>
            <td> <?php echo $data['place']; ?></td>
            <td> <?php echo $data['venue']; ?></td>
            <td> <?php echo $data['from_date']; ?></td>
            <td> <?php echo $data['to_date']; ?></td>
            <td> <?php echo $data['periods']; ?></td>
            </tr>
          <?php
      }
      $_SESSION['academic_year'] = $academic;
      $_SESSION['year'] = $year;
      $_SESSION['semester'] = $semester;

      mysqli_close($con);
     }
    }
      ?>


    </table>


   <body>
