<!doctype html>
<html>
  <head>
    <style>
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
      font-weight: bold;

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

      $event = $_POST['event'];

      $sql="INSERT INTO event (event_name)  values ('$event')";

      $result = mysqli_query($con,$sql);

    if(!mysqli_query($con,$result))
    {
      ?>
      <div class="message">
      Event is inserted in the event table!
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
