<?php
  session_start();
  $username = $_SESSION['username'];
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
    </style>
  </head>
  <?php
    //Checking the primary password
    if(isset($_POST['check']))
    {
      if($_POST['primary_password'] == "" || $_POST['username'] == "")
      {
        ?>
        <div class="error-message">
          Input field is empty!
        </div>
        <?php
      }
      else
      {
        $ssap = md5($_POST['primary_password']);
        $name = $_POST['username'];
        $con = mysqli_connect("localhost","root","","college_project");
        $sql = "SELECT answer From admin_table WHERE  password = '$ssap' AND  username ='$name'";
        $sql2 = mysqli_query($con,$sql);
        if(!mysqli_fetch_array($sql2))
        {
          ?>
          <div class="error-message">
            Password is wrong!
          </div>
          <div class="container">
            <form method="post" action="change.php">
            <input type="text" name="username" placeholder="Primary User?">
            <input type="password" name="primary_password" placeholder="Primary password?">
            <input type="submit" name="check" value="Check">
            </form>
            <a href="homepage.php">
              home page?
            </a>
         </div>
          <?php
          mysqli_close($con);
        }
        else
        {
          $_SESSION['user'] = $name;
          ?>
          <div class="container">
            <form method="post" action="change.php">
              <input type="text" name="secondary_user" placeholder="secondary user?">
              <input type="password" name="secondary_password" placeholder="secondary password?">
              <input type="submit" name="change" value="Change">
            </form>
            <a href="homepage.php">
              home page?
            </a> |
            <a style="margin-left:5px;"href="update.php">
              Back?
            </a>
          </div>
          <?php
        }

      }
    }

    else if(isset($_POST['change']))
    {
      if($_POST['secondary_user'] == "" || $_POST['secondary_password'] == "")
      {
        ?>
        <div class="error-message">
          Input field is empty!
        </div>
        <div class="container">
          <form method="post" action="change.php">
            <input type="text" name="secondary_user" placeholder="secondary username?">
            <input type="password" name="secondary_password" placeholder="secondary password?">
            <input type="submit" name="change" value="Change">
          </form>
          <a href="homepage.php">
            home page?
          </a> |
          <a style="margin-left:5px;"href="update.php">
            Back?
          </a>
        </div>
        <?php
      }
      else
      {
        $secondary_user = $_POST['secondary_user'];
        $secondary_password = $_POST['secondary_password'];
        $name = $_SESSION['user'];
        unset($_SESSION['name']);
        $con = mysqli_connect("localhost","root","","college_project");
        $sql_change = "UPDATE admin_table SET secondary_user = '$secondary_user'
                       ,secondary_password = '$secondary_password' WHERE
                       username = '$name'";
        if(!mysqli_query($con,$sql_change))
        {
          ?>
          <div class="error-message">
            Data(s) not changed!
          </div>
          <?php
          mysqli_close($con);
          header("refresh:2;url=update.php");
        }
        else
        {
          ?>
          <div class="error-message">
            Data(s) is updated!
          </div>
          <?php
          mysqli_close($con);
          header("refresh:3;url=homepage.php");
        }
      }
    }
    else
    {
  ?>

      <div class="container">
        <form method="post" action="change.php">
        <input type="text" name="username" placeholder="Primary Username?">
        <input type="password" name="primary_password" placeholder="Primary password?">
        <input type="submit" name="check" value="Check">
        </form>
        <a href="homepage.php">
          home page?
        </a> |
        <a style="margin-left:5px;"href="update.php">
          Back?
        </a>
     </div>
     <?php
     }
     ?>
     </html>
