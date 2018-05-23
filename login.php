<?php
 session_start()
?>

<!DOCTYPE HTML>
<html>
 <head>
   <style>
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

   body{
   	font-family:verdana;
   	font-weight: bold;
   	align:center;
   	background-color: rgb(77, 77, 77);


   }
   </style>
 </head>

<?php

 if($_POST['log_in_username'] == NULL  || $_POST['log_in_password']== NULL )
    {
?>
      <div class="error-message">
        Username/Password is empty!
      </div>
<?php
      header("refresh:3;url=firstpage.php");
    }
    else
     {
       $username = $_POST['log_in_username'];
       $password = md5($_POST['log_in_password']);
       $con = mysqli_connect("localhost","root","","college_project");
       $sql = "SELECT * FROM admin_table";
       $sql1 = mysqli_query($con,$sql);
       while($data2 = mysqli_fetch_array($sql1))
       {
         $name = $data2['username'];
         $ssap = $data2['password'];
       }
      
       if($username == $name && $password == $ssap)
       {
?>
        <div class="error-message">
          Successfully logged in!
        </div>
<?php
        $_SESSION['username'] = $username;
        header("refresh:3;url=homepage.php");
       }

       else
       {
?>
        <div class="error-message">
          No such user exist! Check username/password!
        </div>
<?php
          header("refresh:4;url=firstpage.php");
       }
     }




 ?>

 </html>
