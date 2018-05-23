
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

      }



			.box1{

        background-color: rgb(0,128,128);
				color:white;
				border:none;
				border-radius:10px;
				font-family:sans-serif;
				height:450px;
				width:300px;
				text-align:center;
				font-style:bold;
				float:left;
        margin-left: -150px;
			}

			.box1:hover{
				background-color: rgba(0,128,128,0.7);
			}

			.box2{

        background-color: rgb(0,128,128);
				color:white;
				border:none;
				border-radius:10px;
				font-family:sans-serif;
				height:450px;
				width:300px;
				text-align:center;
				font-style:bold;
				float:right;
        margin-right: 200px;
			}

      .box2:hover{
				background-color: rgba(0,128,128,0.7);
			}

      .box4{
				/*background-color:#ff9800;*/
        background-color: rgb(0,128,128);
				color:white;
				border:none;
				border-radius:10px;
				font-family:sans-serif;
				height:450px;
				width:300px;
				text-align:center;
				font-style:bold;
				float:right;
        margin-top: -450px;
        margin-right:-130px;

			}

      .box4:hover{
				background-color: rgba(0,128,128,0.7);
			}



			.box3{

        margin:auto;
        background-color: rgb(0,128,128);
				color:white;
				border:none;
				border-radius:10px;
				font-family:sans-serif;
				height:450px;
				width:300px;
				text-align:center;
				font-style:bold;
        margin-top: -5px;
        margin-left: 200px;


			}
      .box3:hover{
				background-color: rgba(0,128,128,0.7);
			}



			h4{
				color:yellow;
			}

			h3{
				font-style:b;
			}

      .user{

        width: 180px;
        height: 25px;
        background-color: #FF6103;
        background: rgba(0, 0, 0, 0.7);
        float: right;
        margin:0 auto;
      	margin-top: -20px;
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


      .menu{
      	width:100%;
      	height: 90px;
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
      	margin-top: -10px;
      	font-size: 20px;
      }

      body{
      	font-family:verdana;
      	font-weight: bold;
      	align:center;
      	background-color: rgb(77, 77, 77);

      }

      h1{
        color: rgb(81,81,81);
      }


		</style>

      <div class="menu">
        <h1>REPORT GENERATION</h1>
        <div class="direction">
          <a href="report_generation.php">HOME</a>
          >
          REPORT_GENERATION
        </div>
    	</div

	</head>

	<body>


		<!--events query-->

	<div class="container">
		<br>
		<div class="box1">
			<form method="POST" action="otherUserEvent.php">
			<hr width=100%>
			<h3 align="center">ON EVENTS!</h3>
			<hr width=100%>



			<p><b>Academic Year:</b></p>
		  <?php

		    $con = mysqli_connect("localhost","root","","college_project");

		    if(!$con)
		    {
		      echo "Server is not connected!";
		    }

		    $sql = "SELECT * FROM academic_year ORDER BY academic_year DESC";

		    $result= mysqli_query($con,$sql);
		  ?>
		    <select  name="academic_year">
          <option value="None-selected">None-selected</option>
		  <?php
		    while($data1 = mysqli_fetch_array($result))
		    {

		  ?>


		    <option value="<?php echo $data1['academic_year']; ?>">
		      <?php echo $data1['academic_year']; ?>
		    </option>

		    <?php
		  };
		    ?>
		  </select><br/>
			<br>
      <p><b>Semester:</b></p>
      <input style="display:none;"type="radio" name="semester"  value="" checked />
      <input type="radio" name="semester" value="even">EVEN</input>
      <input type="radio" name="semester" value="odd">ODD</input>
      <br>





			<p><b>Event:</b></p>

      <?php
    		$sql = "SELECT * FROM activity";

    		$result= mysqli_query($con,$sql);
    	?>
    		<select name="event">
          <option value="None-selected">None-selected</option>

    	<?php
    		while($data = mysqli_fetch_array($result))
    		{
    		//  $option = $row['activity'];
    	?>


    		<option value="<?php echo $data['activity_name']; ?>">
    			<?php echo $data['activity_name']; ?>
    		</option>

    		<?php
    	};
    		?>



    	</select><br>
      <br>

	    <input type="submit" name="submit" value="Submit">

			</form>
		</div>


		<!--YEAR query-->


		<div class="box2">
			<form method="POST" action="otherUserYear.php">
			<hr width=100%>
			<h3 align="center">BY YEAR!</h3>
			<hr width=100%>
			<br>


			<p><b>Academic Year:</b></p>
		  <?php

		    $con = mysqli_connect("localhost","root","","college_project");

		    if(!$con)
		    {
		      echo "Server is not connected!";
		    }

		    $sql = "SELECT * FROM academic_year ORDER BY academic_year DESC";

		    $result= mysqli_query($con,$sql);
		  ?>
		    <select  name="academic_year" >
          <option value="None-selected">None-selected</option>

		  <?php
		    while($data1 = mysqli_fetch_array($result))
		    {

		  ?>


		    <option value="<?php echo $data1['academic_year']; ?>">
		      <?php echo $data1['academic_year'];?>
		    </option>

		    <?php
		  };
		    ?>
		  </select><br/>
			<br><br>




      Year:<br>
    	<select name="year">
        <option value="None-selected">0</option>
    		<option value="1">1</option>
    		<option value="2">2</option>
    		<option value="3">3</option>
    		<option value="4">4</option>
    	</select>
			<br><br>
      <p><b>Semester:</b></p>
      <input style="display:none;"type="radio" name="semester"  value="" checked />
      <input type="radio" name="semester" value="even">EVEN</input>
      <input type="radio" name="semester" value="odd">ODD</input>
      <br>
      <br>

			<input type="submit" name="submit" value="Submit">

			</form>
		</div>

    <!--Achievements query-->

		<div class="box3">
			<form method="POST" action="otherUserAchievement.php">
			<hr width=100%>
			<h3 align="center">ON ACHIEVEMENTS!</h3>
			<hr width=100%>
			<br>


			<p><b>Academic Year:</b></p>
		  <?php

		    $con = mysqli_connect("localhost","root","","college_project");

		    if(!$con)
		    {
		      echo "Server is not connected!";
		    }

		    $sql = "SELECT * FROM academic_year ORDER BY academic_year DESC";

		    $result= mysqli_query($con,$sql);
		  ?>
		    <select  name="academic_year" >
          <option value="None-selected">None-selected</option>

		  <?php
		    while($data1 = mysqli_fetch_array($result))
		    {

		  ?>


		    <option value="<?php echo $data1['academic_year']; ?>">
		      <?php echo $data1['academic_year']; ?>
		    </option>

		    <?php
		  };
		    ?>
		  </select><br/>
			<br><br>

      <p><b>Semester:</b></p>
      <input style="display:none;"type="radio" name="semester"  value="" checked />
      <input type="radio" name="semester" value="even">EVEN</input>
      <input type="radio" name="semester" value="odd">ODD</input>
      <br>
      <br>




			<input type="submit" name="submit" value="Submit"><br>

		</form>
		</div>

    <!-- date query -->
    <div class="box4">
      <form method="POST" action="otherUserDate.php">
			<hr width=100%>
			<h3 align="center">By Date!</h3>
			<hr width=100%>
			<br>
      From:<br>
      <input type="date" name="datefrom" placeholder="yyyy-mm-dd">
      </input> <br>
      To:<br>
      <input type="date" name="dateto" placeholder="yyyy-mm-dd">
      </input>
      <br/>
      <br>
      Year:<br>
    	<select name="year">
        <option value="None-selected" checked>0</option>
    		<option value="1">1</option>
    		<option value="2">2</option>
    		<option value="3">3</option>
    		<option value="4">4</option>
        <option value="5">ALL</option>
    	</select>
      <br>
      <br>
      <input type="submit" name="submit" value="Submit"><br>
    </form>


    </div>


	</div>



  <?php mysqli_close($con); ?>


	</body>
</html>
