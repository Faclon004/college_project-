<?php
session_start();

 ?>



<!DOCTYPE html>
<html>
	<head>
    <link rel="stylesheet" href="button.css">


      <div class="menu">
        <h1>SVCE<br>CSE DEPARTMENT</h1>

        <div class="direction">
          HOME
       </div>
      </div>




		<title>
			project-homepage
		</title>

	<style>
	.dropbtn {
    background-color: #4CAF50;
    border-radius: 10px;
    color:white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #4CAF50;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
	background-color:#4CAF50;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;

}

.dropdown-content a:hover {
  background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color:#3e8e41;
}
a:link{
	color:white;
	background-color:transparent;
	text-decoration:none;
}



body{
	background-image: url("img/mountain.jpg");
  background-size: cover;
  background-repeat: no-repeat;
}


.user{

  width: 180px;
  height: 25px;
  background-color: #FF6103;
  background: rgba(0, 0, 0, 0.7);
  float: right;
  margin:0 auto;
	margin-top: -25px;
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
	height: 130px;
	background-color: rgba(0, 225, 200, 0.5);
	text-align: center;
	font-family: impact;
	font-size: 20px;
	margin-top: -20px;
	border: none;
	border-radius: 20px;



}

.direction{
	font-family: impact;
	font-style: italic;
	font-weight: bold;
	float: left;
	margin-left: 20px;
	margin-top: -20px;
	font-size: 20px;
}

a:link{
	color:white;
	background-color:transparent;
	text-decoration:none;
}

a:visited{
	color:white;
	background-color:transparent;
	text-decoration:none;
}






</style>

	</head>
<body>
<br>
<p>
	<h2 style="text-align:center; font-family:verdana; color:white;">
		Select the actions you want to perform!
	</h2>
</p>
<h3 align="center">


		<!--ss = "box"><a href="enterform.html" target="_self">To Enter the activities of a student</a></div-->



		<br>
		<a href="otherStudentActivity.php" target="_self">
		<div class ="box">
		<div class="dropdown">
		<button class="dropbtn">

		Report on student

		</button>

</div>
</div></a>


		<br>

		<!-- class="box"><a href="activity_form2.html" target="_self">To view the activities of the students in a class</div-->
		<a href="otherClassActivity.php" target="_self">
		<div class ="box">
		<div class="dropdown">
		<button class="dropbtn">

		Report on class
		</button>
		</div>
		</div>
		</a>
		<br>



		<a href="otherReport.php">
		<div class ="box"> <div class="dropdown"><button class="dropbtn">

			Report Generation

		</button>

</div>
</div></a>
		<br><br>


</h3>





<br>



	<h3 style="color:#555555; font-family:verdana;"align="left">
		<a href="help.php">HELP?</a>
	</h3>




</body>
</html>
