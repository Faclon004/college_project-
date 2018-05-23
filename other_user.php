<?php
session_start();
 ?>

 <!doctype html>
 <html>
 <head>
   <style>

   .hover{
     display: none;
     width:200px;
     height: 100px;
     background-color: #000000;

   }

   .text:hover{

     width:200px;
     height: 100px;
     background-color: #000000;
   }
   .text{
     color: white;
     font-family: sans-serif;
     text-decoration: underline;
     margin-left: 150px;
     cursor: pointer;
   }

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

   <script>
    function mouseOver(){
      alert("1.Enter the secondary user name and password in the \n in the spicified fields given!"
              + "\n2.Primary user has the secondary username and password!");
    }
   </script>

</head>
<?php

  if(isset($_POST['submit']))
  {
    $con = mysqli_connect("localhost","root","","college_project");
    $secondary_user = $_POST['secondary_user'];
    $secondary_password = $_POST['secondary_password'];
    $check_query = "SELECT security_question FROM admin_table WHERE secondary_user = '$secondary_user'
    AND secondary_password = '$secondary_password'";
    $check_sql = mysqli_query($con,$check_query);
    if($secondary_password == NULL || $secondary_user == NULL)
    {
      ?>
      <div class="error-message">
        Input field cannot be left empty!
      </div>
      <?php
    }
    else
    {
      $count=0;
      while($raw = mysqli_fetch_array($check_sql))
      {
        ++$count;
      }



      if($count==1)
      {
      ?>
       <div class="error-message">
        Successfully logged in!
       </div>

      <?php
       $_SESSION['username'] = $secondary_user;
       header("refresh:2;url=homepage.php");



       }

       else
       {
      ?>
        <div class="error-message">
         password/username is wrong!
        </div>
      <?php

       }
     }
  } ?>
  <div class="container">
    <form method="post" action="other_user.php">
      <input type="text" name="secondary_user" placeholder="Secondary username?">
      <input type="password" name="secondary_password" placeholder="Password">
      <input type="submit" name="submit" value="Log_in">
    </form>
    <a href="firstpage.php">
      login page?
    </a>
    <div class="text" onmouseover="mouseOver()">
    Help
    </div>
  </div>
