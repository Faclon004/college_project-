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

      $activity = $_POST['activity'];

      $sql="INSERT INTO activity (activity_name)  values ('$activity')";

      $result = mysqli_query($con,$sql);

    if(!mysqli_query($con,$result))
    {
      ?>
      <div class="message">
      Activity has been inserted in the activity table!
    </div>
    <?php

    }

    else
    {
      ?>
      <div class="message">
      Not inserted in the activity table!
      </div>
        <?php
    }
    mysqli_close($con);
    header("refresh:5;url=homepage.php");

    ?>
  </body>
  </html>
