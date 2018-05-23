<?php
session_start();


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

 table{
   background-color: rgb(0, 153, 153);
   background: white;
   width:100%;
   font-family: sans-serif;

   border-spacing: inherit;

 }

 th,td{

   border-style:solid;
   text-align: center;


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
 if($_POST['academic_year'] == "None-selected" || $_POST['semester'] == "")
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
   $sem = $_POST['semester'];
   $count=0;



   $con = mysqli_connect("localhost","root","","college_project");

   if($sem == 'odd')
   {
     $sql = "SELECT student_registration_number,student_name,year,semester,section,achievements,
           event,venue,place,from_date,to_date,periods FROM od_details WHERE academic_year = '$academic'
           AND achievements != 'NULL'  AND (semester = 1 or semester = 3 or semester = 5 or semester =7)
           order by year";
   }
   else
   {
     $sql = "SELECT student_registration_number,student_name,year,semester,section,achievements,
           event,venue,place,from_date,to_date,periods FROM od_details WHERE academic_year = '$academic'
           AND achievements = 'NULL'  AND (semester = 2 or semester = 4 or semester = 6 or semester =8)
           order by year";
   }

   //$sql = "SELECT * FROM od_details WHERE academic_year = '$academic' AND achievements != 'NULL' ORDER BY year";

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
   <h1>REPORT BY ACHIEVEMENT!</h1>
   <h3><a href="homepage.php">HOME</a>
     >>
     <a href="report.php">REPORT</a>
     >>
     REPORT BY ACHIEVEMENT
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

   <div class="box">
     <div style="color:black; font-size;20px; ">Acamedic Year:</div>  <?php echo $academic; ?>
     <br>
     <br>


     <div style="color:black; font-size;20px;">Semester:</div>  <?php echo $sem; ?>
   </div>
   <br>
   <a style="font-family:impact;font-size:20px;width:auto;height:20px;background:black; color:white;"href="achievement_export.php">
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
       <th>Event</th>
       <th>Position</th>
       <th>Place</th>
       <th>Venue</th>
       <th>From</th>
       <th>To</th>
       <th>Hours</th>
      </tr>

      <?php while($data = mysqli_fetch_array($result))
      {

        ?>
            <tr>
            <td> <?php echo ++$count; ?></td>
            <td> <?php echo $data['student_name'];?> </td>
            <td> <?php echo $data['year']; ?></td>
            <td> <?php echo $data['semester']; ?></td>
            <td> <?php echo $data['section']; ?></td>
            <td> <?php echo $data['event']; ?></td>
            <td> <?php echo $data['achievements']; ?></td>
            <td> <?php echo $data['place']; ?></td>
            <td> <?php echo $data['venue']; ?></td>
            <td> <?php echo $data['from_date']; ?></td>
            <td> <?php echo $data['to_date']; ?></td>
            <td> <?php echo $data['periods']; ?></td>
            </tr>
          <?php


      }
      $_SESSION['academic_year'] = $academic;
      $_SESSION['semester'] = $sem;

      mysqli_close($con);
     }
    }
      ?>


    </table>


   <body>
