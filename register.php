<?php
session_start();
$con = mysqli_connect("localhost","root","","college_project");
 ?>

 <!DOCTYPE HTML>
 <html>
  <head>
    <style>
    body{
    	font-family:verdana;
    	font-weight: bold;
    	align:center;
    	background-color: rgb(77, 77, 77);


    }
    .error-message
    {
      width: 500px;
      height: 40px;
      background-color: rgba(200, 0, 0, 0.5);
      color: #fff;
      padding: 10px 15px;
      text-align: center;
      font-family: sans-serif;
      margin:0 auto;
      display: run-in;
    }
    </style>
  </head>

  <?php





      $check_sql = "SELECT * FROM admin_table";
      $sql1 = mysqli_query($con,$check_sql);
      $count=0;
      while($sql11 = mysqli_fetch_array($sql1))
      {
        ++$count;
      }
      //Checking whether the table already have a record!
      if($count>=1)//if yes
      {
    ?>
        <div class="error-message">
          Cannot Register!
        </div>
    <?php
        header("refresh:3;url=firstpage.php");
      }

      else
      {
        if($_POST['username'] == NULL || $_POST['password1'] == NULL || $_POST['password2'] == NULL || $_POST['secondary_password'] == NULL
           || $_POST['security_question'] == NULL || $_POST['answer'] == NULL || $_POST['secondary_user'] == NULL)
           {
      ?>
             <div class="error-message">
               Input fields are empty!
             </div>
      <?php
              header("refresh:3;url=firstpage.php");
           }
        else if($_POST['password1'] != $_POST['password2'])
        {
      ?>
          <div class="error-message">
            Passwords do not match!
          </div>
      <?php
            header("refresh:3;url=firstpage.php");

        }
        else if($_POST['password1'] == $_POST['password2'])
        {
        $username = $_POST['username'];
        $password = md5($_POST['password1']);
        $email = $_POST['email'];
        $security_question = $_POST['security_question'];
        $answer = $_POST['answer'];
        $sec_user = $_POST['secondary_user'];
        $sec_pass = $_POST['secondary_password'];
        $insert_sql = "INSERT INTO admin_table (username, password, email, security_question,answer,secondary_user,secondary_password)
        VALUES ('$username','$password','$email','$security_question','$answer','$sec_user','$sec_pass')";

        if(mysqli_query($con,$insert_sql))
        {
      ?>
          <div class="error-message">
            Registered!
          </div>

      <?php
        $_SESSION['username'] = $username;
        header("refresh:3;url=homepage.php");
        }

      }
    }




    ?>
