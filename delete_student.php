<?php
session_start();
 ?>
 <!doctype html>
 <html>
  <head>
    <title>Deleting student details from a class</title>
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

    }

    .bg{
      background-color:#008282;
      color:white;
      font-family:sans-serif;
      border:solid;
      border-radius:6px;
      border-color:#006482;

    }

    h4{
      color:yellow;
    }

    h3{
      font-style:b;
    }

    a:link{
      color:white;
      background-color:transparent;
      text-decoration:none;
      font-family: verdana;
    }

    a:visited{
      color:white;
      background-color:transparent;
      text-decoration:none;
    }

    body{
      background-color: rgb(77,77,77);

      }


        .user{

          width: 180px;
          height: 25px;
          background-color: #FF6103;
          background: rgba(0, 0, 0, 0.7);
          float: right;
          margin:0 auto;
          margin-top: 10px;
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
          margin-bottom: 40px:


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

        .menu{
          width:100%;
          height: 150px;
          background-color: rgba(0, 225, 200, 0.5);
          margin-top: -32px;
          border: none;
          border-radius: 20px;



        }

        .container1{
          background-color: rgb(0,128,128);
          width: 500px;
          height: 400px;
          margin:  auto;
          margin-top: 50px;
          border: none;
          border-radius: 20px;
          text-align: center;
          font-size: 20px;
          color: white;
          font-family: verdana;

        }

        .direction{
          font-family: impact;
          font-style: italic;
          font-weight: bold;
          float: left;
          margin-left: 20px;
          margin-top: 20px;
          font-size: 20px;
        }

        label{
          color: black;
          font-family: impact;
        }

        </style>
        <!-- Heading start-->
        <div class="menu">
    			<h1 align="center" text-align="center"
          style="font-family:impact; font-size:50px; color:rgb(88,88,88)">
          STUDENT DETAILS
          </h1>

          <!--lOG OUT BUTTON-->
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
           <!--lOG OUT button end -->

    			 <div class="direction">
    				 <a href="homepage.php">
               HOME
             </a>
    				 >
             <a href="update.php">
    				   UPDATE
             </a>
             >
             Confirmation

    		 </div>
         </div>
         <!-- Heading end-->

      </head>




      <body>

        <?php

          if(isset($_POST['delete']))
          {
          $con = mysqli_connect("localhost","root","","college_project");
          if(!$con)
          echo "Database not connected!";
          $student_regno = $_POST['student_regno'];
          $_SESSION['student_regno'] = $student_regno;
        //  echo $student_regno;
          $stmt = "SELECT * FROM student_detail WHERE
                   student_registration_number = $student_regno";
          $sql = mysqli_query($con,$stmt);
          if($data = mysqli_fetch_array($sql)){
            $name = $data['student_name'];
            $regno = $data['student_registration_number'];
            $batch = $data['batch'];
            $section = $data['section'];
            ?>

            <div class="container1">
              <br>
              <label>Name </label><br>
              <?php echo $name; ?>
              <br><br>
              <label>Registration number </label><br>
              <?php echo $regno; ?>
              <br><br>
              <label>Section </label><br>
              <?php echo $section;?>
              <br><br>
              <label>Batch </label><br>
             <?php echo $batch; ?>
             <form method="post" action="delete_student.php">
             <input style="margin:0 auto; margin-top:10px; background:black;
                           color:white; cursor:pointer;"
     				               type="submit" name="conform" value="DELETE">
     			   </input>
             </form>

            </div>
            <?php
          }

          else {
            ?>
            <div class="message">
             NO data exist
            </div>
            <?php
          }

          mysqli_close($con);
           ?>



        <?php
          }
          else if(isset($_POST['conform'])){
            $con = mysqli_connect("localhost","root","","college_project");
            if(!$con)
            echo "Not connected to database";
            $student_regno = $_SESSION['student_regno'];
            unset($_SESSION['student_regno']);
            echo $student_regno;
            $del_stmt = "DELETE FROM student_detail WHERE
                         student_registration_number = $student_regno";
            $sql = mysqli_query($con,$del_stmt);

            ?>
            <div class="message">
              Successfully deleted!!
            </div>
            <?php
            mysqli_close($con);

          }
         ?>
