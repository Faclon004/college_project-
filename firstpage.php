<?php
session_start();


if(isset($_POST['log_out']))
{
  unset($_SESSION['username']);
}

$con = mysqli_connect("localhost","root","","college_project");

?>


<!doctype html>
<html>
<head>

  <style>

  .footer{
    position: absolute;
    left: 0;
    bottom: 0;
    width: 20%;
    height: 50px;
    background-color: rgba(68,102,0,0);
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;

  }

  .content{
    display: none;
    top:-350px;
    left:5px;
    width: 100%;
    height:350px;
    background-color:  rgba(58,77,77,0.5);
    border-radius: 10px;


  }

  .developers{
     width: 100px;
     height: 30px;
     margin-left: 5px;
     background-color:  rgba(58,77,77,0.1);
     border-radius: 50%;
     text-align: center;
     padding-top: 9px;
     font-family: impact;
  }

  .developers:hover{
    background-color: white;
    color:black;
    cursor: pointer;
  }

  .developers:hover .content{
    display: inline-block;
    position: absolute;
  }





  body{
    margin: 0 auto;
    background-image: url("img/mountain.jpg");
    background-size: cover;
    background-position: center;
    background-color: rgba(0, 0, 0, 0.3);
    position: relative;
    background-repeat: no-repeat;
    top:0;
    bottom: 0;
    z-index: -10;
    height: 100vh;

  }
    #hero{
      background-image: url("img/mountain.jpg");
      background-size: cover;
      background-position: center;
      position: relative;
      top:0;
      bottom: 0;
      z-index: -10;
      height: 100vh;

    }

    #hero-overlay{
      position: relative;
      background-color: rgba(0, 0, 0, 0.2);
      top:0;
      bottom: 0;
      height: 100%;
      widht:100%;
      z-index: -5;
    }

    .container{
      background-color: rgba(53, 72, 50, 0.5);
      width: 500px;
      height: 500px;
      margin:  auto;
      margin-top: 35px;
    }

    .container img{
      height: 80px;
      width: 280px;
      margin-top: -30px;
      margin-bottom: 30px;
      margin-left: 120px;
      background: rgba(0, 255, 0, 1);

    }

    input[type="text"],input[type="password"],input[type="email"]{
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

    .error-message{
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

    .menu{
      width: 100%;
      height: 80px;
      background-color: rgba(0, 225, 200, 0.5);
      margin-top: 20px;


    }

  .button{
    width: 400px;

    height: 70px;
    border-radius:10px;

    background-color: rgba(0,201,87,0.1);
    float:right;
    margin-top: 10px;
    margin-right : -40px;
    text-align: center;
    text-shadow: solid;
    font-family: impact;
    font-weight: bold;
    color: white;
    font-size: 50px;
  }






    </style>

  </head>

    <body>

      <?php //common for every form ?>
      <div class="menu">



        <!--div class="button"-->


          <form method="post" action="firstpage.php">
            <input style="
            width: 160px;
            cursor: pointer;
            height: 35px;
            border-radius:10px;
            border-bottom: solid;
            border-bottom-color: black;
            border-right: solid;
            background-color: rgba(0,201,87,1);
            float:right;
            margin:auto;
            margin-top: 25px;

            margin-right: 20px;
            text-align: center;
            text-shadow: solid;
            font-family: impact;
            font-weight: bold;
            color: white;
            font-size: 25px;
            " type="submit" name="register" value="REGISTER">

          </form>
        <!--/div-->


        </form>

        <form method="post" action="firstpage.php">
          <input style="
          width: 160px;
          cursor: pointer;
          height: 35px;
          border-radius:10px;
          border-bottom: solid;
          border-bottom-color: black;
          border-right: solid;
          background-color: rgba(0,201,87,1);
          float:right;
          margin-top: 25px;
          margin-right:20px;
          text-align: center;
          text-shadow: solid;
          font-family: impact;
          font-weight: bold;
          color: white;
          font-size: 25px;
          " type="submit" name="log_in" value="LOGIN">

        </form>

<!--other users-->
        <form method="post" action="otherUser.php">
          <input style="
          width: 160px;
          cursor: pointer;
          height: 35px;
          border-radius:10px;
          border-bottom: solid;
          border-bottom-color: black;
          border-right: solid;
          background-color: rgba(0,201,87,1);
          float:right;
          margin:auto;
          margin-top: 25px;

          margin-right: -150px;
          text-align: center;
          text-shadow: solid;
          font-family: impact;
          font-weight: bold;
          color: white;
          font-size: 25px;
          " type="submit" name="other_user" value="OTHER USERS">

        </form>



        <div class="button">
          OD DETAILS
        </div>







      </div>

      <?php
        if(isset($_SESSION['message']))
        {
      ?>
        <div class="error-message">
          <?php
          echo $_SESSION['message'];
          ?>
        </div>
      <?php
        }
        unset($_SESSION['message']);
        ?>



      <?php
      if(isset($_POST['register']))
      {
       ?>

        <div class="container">

          <img src="img/register.png">
          <form method="post" action="register.php">






          <input type="text" name="username" placeholder="Enter your name" required>
          <input type="password" name="password1" placeholder="Enter the password" required>
          <input type="password" name="password2" placeholder="Enter the password again" required>
          <input type="email" name="email" placeholder="Enter you email id" required>
          <input type="text" name="security_question" placeholder="Enter the question!" required>
          <input type="text" name="answer" placeholder="Answer for the question" required>
          <input type="text" name="secondary_user" placeholder="enter the secondary username" required>
          <input type="password" name="secondary_password" placeholder="Enter the secondary password" required>
          <br>
          <input style="
          cursor: pointer;
          height: 40px;
          width: 150px;
          background-color: #00CD66;
          border: none;
          color: #fff;
          border-bottom: 15px;
          border-bottom-color: blue;
          border-radius: 5px;
          margin-top: 25px;
          margin-left: 180px;
          font-size: 15px;
          font-family: sans-serif;
          font-weight: bold;

          " type="submit" name="insert" value="REGISTER">

        </form>

        </div>

      <?php
    }
        else if(isset($_POST['log_in']))
        {

        ?>

        <div class="container">

          <img src="img/login.png">

          <form method="post" action="login.php">
            <input type="text" name="log_in_username" placeholder="Enter the username" required>
            <input type="password" name="log_in_password" placeholder="Enter the password" required><br>
            <a style="margin-left:150px;color:white;font-family:impact;"
            name="forgot_password" href="forgot_password.php">Forgot password?</a><br>
            <a style="margin-left:150px;color:white;font-family:impact;"
            name="other_user" href="other_user.php">Other user</a><br>

            <input style="
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

            "type="submit" value="LOGIN" name='log_in_homepage'>
          </form>

        </div>










        <?php
      }
      ?>


      <div class="footer">

        <footer>Copyright &copy; SVCE CSE Department
          <br>
          <div class="developers">
            Developers
            <div class="content">
              <img src="img/developer.png" alt="developer_1" style="border-radius:50%;"/>
              <p> Aravindhan K <br> CSE-A 2015-2019 Batch</p>
              <img src="img/developer.png" alt="developer_2" style="border-radius:50%;"/>
              <p> Iyappan S <br> CSE-A 2015-2019 Batch</p>
            </div>
          </div>
        </footer>


      </div>

  </body>
  </html>
