<!doctype html>
<head>
  <style>
  .message
  {
    width:300px;
    height:30px;
    border-radius: 10px;
    border-style: solid;
    border-color: green;
    background-color: #9ACD32;
    color:white;
    text-align:center;
    font-family: sans-serif;

  };
  </style>
</head>

<?php


 $student_regno=$_POST['student_regno'];
 $student_name=$_POST['student_name'];
 $batch=$_POST['batch'];
 $section=$_POST['section'];

 $con = mysqli_connect("localhost","root","","college_project");

 if(!$con)
 {
   echo "Server not connected";
 }



 $sql = "INSERT INTO student_detail (student_registration_number,student_name,batch,section) VALUES ('$student_regno','$student_name','$batch','$section')";

 if(!mysqli_query($con,$sql))
 {
   ?>
   <div class="message">
   Data not inserted into the Student table!
    </div>
    <?php
 }

 else
  {
    ?>
    <div class="message">
      Data is inserted into the student table!
    </div>

    <?php

  }

 mysqli_close($con);
 header("refresh:5;url=homepage.php");


 ?>
 </html>
