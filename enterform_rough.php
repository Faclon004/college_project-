<?php
session_start();
?>

<!doctype html>
	<head>
		<style>

			.container {
				margin:  30px auto;
				width: 1000px;
			}

			.container > div {
				width: 28%;
			}



			.box1{
				background-color:#4CAF50;
				color:white;
				border:solid;
				border-radius:6px;
				border-color:cyan;
				font-family:sans-serif;
				height:500px;
				width:400px;
				text-align:center;
				font-style:bold;
				float:left;
			}

			.box1:hover{
				background-color:#46a049;
			}

			.box2{
				background-color:#ff9800;
				color:white;
				border:solid;
				border-radius:6px;
				border-color:cyan;
				font-family:sans-serif;
				height:500px;
				width:400px;
				text-align:center;
				font-style:bold;
				float:right;
			}

			.box2:hover{
				background-color:#e68a00;
			}




			.box3{
				background-color:#2196F3;
				color:white;
				border:solid;
				border-radius:6px;
				border-color:cyan;
				font-family:sans-serif;
				height:200px;
				width:400px;
				text-align:center;
				font-style:bold;
				margin:auto;

			}
			.box3:hover {
				background: #0b7dda
			}

			.box4{
				background-color:#2196F3;
				color:white;
				border:solid;
				border-radius:6px;
				border-color:cyan;
				font-family:sans-serif;
				height:200px;
				width:400px;
				text-align:center;
				font-style:bold;
				margin:auto;
				margin-top: 100px;

			}
			.box4:hover {
				background: #0b7dda
			}

			.bg{
				background-color:#006400;
				color:white;
				font-family:sans-serif;
				border:solid;
				border-radius:6px;
				border-color:green;

			}

			h4{
				color:yellow;
			}

			h3{
				font-style:b;
			}

			a:link{
				color:yellow;
				background-color:transparent;
				text-decoration:none;
			}

			a:visited{
				color:yellow;
				background-color:transparent;
				text-decoration:none;
			}

			body{
				background-color: #FAFAFA;
				background: rgba(0,0,0,0.2);
					}


					.user{

					  width: 180px;
					  height: 25px;
					  background-color: #FF6103;
					  background: rgba(0, 0, 0, 0.7);
					  float: left;
					  margin:0 auto;
					  margin-left: 30px;
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


		</style>
		<div class="bg">
		<h1 align="center" text-align="center">UPDATE</h1>
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
		<h4 color="yellow" align="right"> HOW TO? | <a href="homepage.php" align="left">HOME</a></h4>
		</div>

	</head>

	<body>


		<!--Insert student details-->

	<div class="container">
		<br><br><br>


		<div class="box1">
			<form method="POST" action="enter_details.php">
			<hr width=100%>
			<h3 align="center">Insert</h3>
			<hr width=100%>
			<br>


			<label >Registration number:</label>
			<br><br>
			<input type="number" name="student_regno">
			<br><br><br>


			<label>Student Name:</label>
			<br>
			<input type="text" name="student_name">
			<br><br><br>


			<label align="leftwards">Batch:</label>
			<br>
			<?php

	      $con = mysqli_connect("localhost","root","","college_project");

	      if(!$con)
	      {
	        echo "Server is not connected!";
	      }

	      $sql1 = "SELECT * FROM batch ORDER BY batch DESC";

	      $result1 = mysqli_query($con,$sql1);
	    ?>
	      <select multiple name="batch" size="3">
	    <?php
	      while($data1 = mysqli_fetch_array($result1))
	      {

	    ?>


	      <option value="<?php echo $data1['batch']; ?>">
	        <?php echo $data1['batch'];  ?>
	      </option>

	      <?php
	    };
	      ?>



    </select>
			<br><br><br>

      <label>Section:</label>
			<br><br>
			<input type="radio" value="A" name="section" display="inline-block">A</option>
      <input type="radio" value="B" name="section" display="inline-block">B</option>
      <input type="radio" value="C" name="section" display="inline-block">C</option>
			<br><br><br>

			<input type="submit" name="submit" value="Insert">

			</form>
		</div>


		<!--Delete a batch-->


		<div class="box2">
			<form method="POST" action="delete_batch.php">
			<hr width=100%>
			<h3 align="center">Delete a batch</h3>
			<hr width=100%>
			<br>

      <label>Batch:</label>
			<br>

			<?php

	      $con = mysqli_connect("localhost","root","","college_project");

	      if(!$con)
	      {
	        echo "Server is not connected!";
	      }

	      $sql1 = "SELECT * FROM batch ORDER BY batch DESC";

	      $result1 = mysqli_query($con,$sql1);
	    ?>
	      <select multiple name="batch" size="3">
	    <?php
	      while($data1 = mysqli_fetch_array($result1))
	      {

	    ?>


	      <option value="<?php echo $data1['batch']; ?>">
	        <?php echo $data1['batch'];  ?>
	      </option>

	      <?php
	    };
	      ?>



    </select>
			<br><br>









			<input type="submit" name="delete_batch" value="Delete">

			</form>
			<br>
			<br><br>

					<!-- Add academic year-->
				<form method="POST" action="addacademic.php">
				<hr width=100%>
				<h3 align="center">Add academic year</h3>
				<hr width=100%>
				<br>


				<label >Academic year:</label>
				<br><br>
				<input type="text" name="academic_year" value="yyyy-yyyy">
				<br><br>



				<input type="submit" name="submit" value="Insert">

				</form>



		</div>




<!-- Add activity -->

		<div class="box3">
			<form method="POST" action="addoption.php">
			<hr width=100%>
			<h3 align="center">Add activity</h3>
			<hr width=100%>
			<br>


			<label >Activity Name:</label>
			<br><br>
			<input type="text" name="activity" value="activity">
			<br><br>



			<input type="submit" name="submit" value="Insert">

			</form>
		</div>

<!-- Add a batch-->


		<div class="box4" >
			<form method="POST" action="addbatch.php">
			<hr width=100%>
			<h3 align="center">Add batch</h3>
			<hr width=100%>
			<br>


			<label> Batch:</label>
			<br><br>
			<input type="text" name="batch" value="yyyy-yyyy">
			<br><br>



			<input type="submit" name="submit" value="Insert">

			</form>
		</div>













	</div>
	<br>


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
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>


	</body>
</html>
