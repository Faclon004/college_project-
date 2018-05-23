<!doctype html>
<html>
  <head>
    <style>
    body
    {
      font-family:verdana;
      font-weight: bold;
      align:center;
      background-color: rgb(77, 77, 77);
    }
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

      $batch = $_POST['batch'];

      $sql="INSERT INTO batch (batch)  values ('$batch')";

      $result = mysqli_query($con,$sql);

    if(!mysqli_query($con,$result))
    {
      ?>
      <div class="message">
      Batch has been inserted in Batch table!
    </div>
    <?php
    }

    else
    {
      ?>
      <div class="message">
      Not inserted in the batch table!
    </div>
    <?php
    }
    header("refresh:5;url=homepage.php");

    ?>
  </body>
  </html>
