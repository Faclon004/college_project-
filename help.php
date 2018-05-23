<?php
session_start();
 ?>

 <!doctype html>
 <html>
 <head>
   <link rel="stylesheet" href="form_border.css">
   <?php
 	if (isset($_SESSION['username']))
 	{ ?>
 	<title>help</title>

   <div class="menu">
     <h1>HELP</h1>
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
     <div class="direction">
       <a href="homepage.php">BACK</a>
     </div>
 	</div>
</head>
<?php } ?>
<body>
  <ol>
    <li>For each academic year, the student details of the new batch must be
      uploaded in the Database</li>
      <br>
    <li>Before uploading the CSV file into the Database, the file should have
      the student details in the format given below!</li>
    <table border="1">
      <tr>
        <th>Student name</th>
        <th>Registration number</th>
        <th>Batch</th>
        <th>Section</th>
      </tr>
      <tr>
        <td>AAAAA</td>
        <td>1111111</td>
        <td>yyyy-yyyy</td>
        <td>A</td>
      </tr>
    </table>
    <br>

    <li>The OD details based on the Class, a particular student, their achievement
      ,etc.., can be generated!</li>
      <br>
    <li>Only the Primary user has the authority to manipulate the whole system!</li>
    <br>
    <li>In the absence of the Primary user, secondary user can get the username
      and password for the secondary user from the Primary user, then he/she
      can use the system</li>
      <br>
    <li>Only the Primary user can change the Password and username of the secondary
      user</li>
      <br>
    <li>Faced any difficulties with the system or need additional functionalities
      to the system, you can contact us</li>
      <br>
      <ul>
        <li>aravindkathiravan6@gmail.com(Aravindhan K)</li>
        <li>iyappan.s.k@gmail.com(Iyappan S)</li>
      </ul>
    </ol>
  </body>
  </html>
