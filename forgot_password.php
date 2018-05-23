<?php
session_start();



?>
 <!doctype html>
 <html>
 <head>
   <style>

   a
   {
     color: white;
     text-decoration:underline;
     font-family: sans-serif;
     margin-left: 150px;
   }
   body
   {
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

   .container{
     background-color: rgba(53, 72, 50, 0.5);
     width: 500px;
     height: 500px;
     margin:  auto;
     margin-top: 35px;
   }

   input[type="text"],[type="password"]{
     width:200px;
     height:30px;
     background-color: #fff;
     margin: 0 auto;
     margin-top:5px;
     margin-bottom: 5px;
     margin-left: 150px;
     font-family: sans-serif;
     font-size: 15px;
     padding-left: 10px;


   }

   input[type="submit"]{
   cursor: pointer;
   height: 40px;
   width: 150px;
   background-color: #00CD66;
   border: none;
   color: #fff;
   border-bottom: 15px;
   border-bottom-color: blue;
   border-radius: 5px;
   margin-top: 10px;
   margin-left: 180px;
   font-size: 15px;
   font-family: sans-serif;
   font-weight: bold;
 }
 .container img{
   height: 80px;
   width: 280px;
   margin-top: -30px;
   margin-bottom: 30px;
   margin-left: 120px;
   background: rgba(0, 255, 0, 1);

 }
   </style>

</head>

<?php
  $con = mysqli_connect("localhost","root","","college_project");
  $get_sql = "SELECT security_question FROM admin_table";
  $store = mysqli_query($con,$get_sql);
  if($data = mysqli_fetch_array($store))
  {
  $question = $data['security_question'];
  }

  if(isset($_POST['submit']))
  {
    $answer = $_POST['answer'];
    $mysqli_answer = 0;
    $check_sql = "SELECT answer FROM admin_table";
    $check_query = mysqli_query($con,$check_sql);
    if($check_data = mysqli_fetch_array($check_query))
    {
      $mysqli_answer = $check_data['answer'];
    }
      if($answer == $mysqli_answer)
      {
    ?>

    <div class="container">
      <img src="img/forgot_password.png">
      <form method="post" action="forgot_password.php">
        <input type="text" name="username" placeholder="username"><br>
        <input type="password" name="newpassword" placeholder="Enter the new password"><br>
        <input type="password" name="newpassword1" placeholder="confirm the new password"><br>
        <input type="submit" name="change" value="change">
      </form>
      <a href="firstpage.php">
        login page?
      </a>
    </div>
  <?php
      }

      else
      {
    ?>
    <div class="error-message">
      The answer is wrong!
    </div>
    <?php
    header("refresh:1;url=forgot_password.php");
      }

  }

  else if(isset($_POST['change']))
  {
    if($_POST['username'] == NULL || $_POST['newpassword'] == NULL || $_POST['newpassword1'] == NULL)
    {
      ?>
      <div class="error-message">
        Input field cannot be left empyt!
      </div>
      <div class="container">
        <img src="img/forgot_password.png">
        <form method="post" action="forgot_password.php">
          <input type="text" name="username" placeholder="username"><br>
          <input type="password" name="newpassword" placeholder="Enter the new password"><br>
          <input type="password" name="newpassword1" placeholder="confirm the new password"><br>
          <input type="submit" name="change" value="change">
        </form>
        <a href="firstpage.php">
          login page?
        </a>
      </div>
      <?php

    }
    else if($_POST['newpassword'] == $_POST['newpassword1'])
    {
      $username = $_POST['username'];
      $username2 = 0;

      $check1 = "SELECT * FROM admin_table";
      $check2 = mysqli_query($con,$check1);
      if($data2 = mysqli_fetch_array($check2))
      {
        $username2 = $data2['username'];
      }



      $password = md5($_POST['newpassword']);
      $change_query  = "UPDATE admin_table SET  password = '$password' WHERE  username = '$username'";
    /*  if(!mysqli_query($con,$check_username))
      {
        ?>
        <div class="error-message">
          Username is wrong!
        </div>
        <?php
        header("refresh:3;url=forgot_password.php");
      }*/
      if($username != $username2)
      {
        ?>
        <div class="error-message">
          Username is wrong!
        </div>
        <div class="container">
          <img src="img/forgot_password.png">
          <form method="post" action="forgot_password.php">
            <input type="text" name="username" placeholder="username"><br>
            <input type="password" name="newpassword" placeholder="Enter the new password"><br>
            <input type="password" name="newpassword1" placeholder="confirm the new password"><br>
            <input type="submit" name="change" value="change">
          </form>
          <a href="firstpage.php">
            login page?
          </a>
        </div>
        <?php

      }

      else if(mysqli_query($con,$change_query))
      {

        ?>
        <div class="error-message">
        The password is successfully changed!
        </div>
        <?php
        header("refresh:3;url=firstpage.php");
      }



    }

      else
      {
        ?>
        <div class="error-message">
          The passwords do not match!
        </div>
        <div class="container">
          <img src="img/forgot_password.png">
          <form method="post" action="forgot_password.php">
            <input type="text" name="username" placeholder="username"><br>
            <input type="password" name="newpassword" placeholder="Enter the new password"><br>
            <input type="password" name="newpassword1" placeholder="confirm the new password"><br>
            <input type="submit" name="change" value="change">
          </form>
          <a href="firstpage.php">
            login page?
          </a>
        </div>
        <?php

      }


  }
  else


  {


  ?>
  <div class="container">
    <img src="img/forgot_password.png">
  <form method="post" action="forgot_password.php">
    <input type="text" name="answer" placeholder="<?php echo $question;?>">
    <input type="submit" name="submit" value="Check">
  </form>
  <a href="firstpage.php">
    login page?
  </a>
  </div>

<?php
}
 ?>
