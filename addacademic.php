<!doctype html>
<html>
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

  <body>


    <?php

      $con = mysqli_connect("localhost","root","","college_project");

      if(!$con)
      {
        echo "Server is not connected!";
      }

      $academic = $_POST['academic_year'];

      $sql="INSERT INTO academic_year (academic_year)  values ('$academic')";

      $result = mysqli_query($con,$sql);

    if(!mysqli_query($con,$result))
    {
      ?>
      <div class="message">
      Academic year has been inserted!
    </div>
    <?php
    }

    else
    {
      ?>
      <div class="message">
      Not inserted in the db!
    </div>
    <?php
    }

    header("refresh:5;url=homepage.php");

    ?>
  </body>
  </html>
