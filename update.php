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
				font-weight: bold;

			};





			.bg{
				background-color:#008282;
				color:white;
				font-family:sans-serif;
				border:solid;
				border-radius:6px;
				border-color:#006482;

			}

			h4{
				color:yellow;
			}

			h3{
				font-style:b;
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

			body{
				background-color: rgb(77,77,77);

				}


					.user{

					  width: 180px;
					  height: 25px;
					  background-color: #FF6103;
					  background: rgba(0, 0, 0, 0.7);
					  float: right;
					  margin:0 auto;
						margin-top: 10px;
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

          .menu{
            width:100%;
            height: 150px;
            background-color: rgba(0, 225, 200, 0.5);
            margin-top: -32px;
						border: none;
						border-radius: 20px;



          }

          .container1{
            background-color: rgb(0,128,128);
            width: 500px;
            height: 400px;
            margin:  auto;
            margin-top: 50px;
						border: none;
						border-radius: 20px
          }

          input[type="text"], input[type="number"]
          {
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

          label{
            width: auto;
            height: auto;
            font-family: sans-serif;
            font-size: 15px;
            margin: 0 auto;
            margin-top:10px;
            margin-bottom: 5px;
            margin-left:230px;
            font-weight: bold;



          }

          select{
            margin: 0 auto;
            margin-top:10px;
            margin-bottom: 5px;
            margin-left:210px;

          }

					.direction{
						font-family: impact;
						font-style: italic;
						font-weight: bold;
						float: left;
						margin-left: 20px;
						margin-top: 20px;
						font-size: 20px;
					}


          /*body{
          	background-image: url("img/abstract.jpg");
            background-size: cover;
          }*/



		</style>

		<script>
		 function update(){
			 alert("Want to change the secondary user name and password!");
		 }

		 </script>


		<?php

		if(isset($_SESSION['username']))
		{
		?>


	</head>

	<body>

    <div class="menu">
			<h1 align="center" text-align="center" style="font-family:impact; font-size:50px; color:rgb(88,88,88)">UPDATE</h1>


      <form method="post" action="update.php">
        <input style="
        width: 160px;
        cursor: pointer;
        height: 35px;
				border:none;
				border-radius:10px;
				border-bottom:5px;
				border-bottom: solid;
				border-bottom-color:black;

				border-right: solid;
				border-right-color:black;
      	background-color: rgba(0,201,87,1);
        float:right;
        margin:auto;
        margin-top: -25px;

        margin-right: 100px;
        text-align: center;
        text-shadow: solid;
        font-family: verdana;
        font-weight: bold;
        color: black;
        font-size: 15px;
        " type="submit" name="insert" value="INSERT">
      </form>

      <form method="post" action="update.php">
        <input style="
        width: 160px;
        cursor: pointer;
        height: 35px;
				border:none;
				border-radius:10px;
        border-bottom:5px;
        border-bottom: solid;
				border-bottom-color:black;

        border-right: solid;
				border-right-color:black;
        background-color: rgba(0,201,87,1);
        float:right;
        margin:auto;
        margin-top: -25px;

        margin-right: 50px;
        text-align: center;
        text-shadow: solid;
        font-family: verdana;
        font-weight: bold;
        color: black;
        font-size: 15px;
        " type="submit" name="add_academic_year" value="ADD YEAR">
      </form>

      <form method="post" action="update.php">
        <input style="
        width: 160px;
        cursor: pointer;
        height: 35px;
				border:none;
				border-radius:10px;
				border-bottom:5px;
				border-bottom: solid;
				border-bottom-color:black;

				border-right: solid;
				border-right-color:black;
        background-color: rgba(0,201,87,1);
        float:right;
        margin:auto;
        margin-top: -25px;

        margin-right: 50px;
        text-align: center;
        text-shadow: solid;
        font-family: verdana;
        font-weight: bold;
        color: black;
        font-size: 15px;
        " type="submit" name="add_batch" value="ADD BATCH">
      </form>

      <form method="post" action="update.php">
        <input style="
        width: 160px;
        cursor: pointer;
        height: 35px;
				border:none;
				border-radius:10px;
				border-bottom:5px;
				border-bottom: solid;
				border-bottom-color:black;

				border-right: solid;
				border-right-color:black;
        background-color: rgba(0,201,87,1);
        float:right;
        margin:auto;
        margin-top: -25px;

        margin-right: 50px;
        text-align: center;
        text-shadow: solid;
        font-family: verdana;
        font-weight: bold;
        color: black;
        font-size: 15px;
        " type="submit" name="delete_student" value="DELETE STUDENT">
      </form>

			<form method="post" action="change.php">
				<input style="
				width: 160px;
				cursor: pointer;
				height: 35px;
				border:none;
				border-radius:10px;
				border-bottom:5px;
				border-bottom: solid;
				border-bottom-color:black;

				border-right: solid;
				border-right-color:black;
				background-color: rgba(0,201,87,1);
				float:left;
				margin:auto;
				margin-top: -25px;

				margin-left: 40px;
				text-align: center;
				text-shadow: solid;
				font-family: verdana;
				font-weight: bold;
				color: black;
				font-size: 15px;
				" type="submit" name="change_user" value="UPDATE">
			</form>

      <form method="post" action="update.php">
        <input style="
        width: 160px;
        cursor: pointer;
        height: 35px;
				border:none;
				border-radius:10px;
				border-bottom:5px;
				border-bottom: solid;
				border-bottom-color:black;

				border-right: solid;
				border-right-color:black;
        background-color: rgba(0,201,87,1);
        float:right;
        margin:auto;
        margin-top: -25px;

        margin-right: 50px;
        text-align: center;
        text-shadow: solid;
        font-family: verdana;
        font-weight: bold;
        color: black;
        font-size: 15px;
        " type="submit" name="add_activity" value="ADD ACTIVITY">
      </form>



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
				 <a href="homepage.php">HOME</a>
				 >
				 UPDATE

		 </div>


    </div>


    <?php
    if(isset($_POST['insert']))
    {
      ?>

      <div class="container1">


        <label style="font-size:30px; margin-left:210px;"> INSERT </label>
        <form method="post" action="enter_details.php">
        <input type="number" name="student_regno" placeholder="Enter the registration no!">

        <input type="text" name="student_name" placeholder="Enter the name!">


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

        <label>Section:</label>
        <br><br>
        <input style="margin-left:200px;"type="radio" value="A" name="section" display="inline-block">A</option>
        <input type="radio" value="B" name="section" display="inline-block">B</option>
        <input type="radio" value="C" name="section" display="inline-block">C</option>

        <input style="margin:0 auto; margin-top:10px; margin-left:230px; background:black; color:white; cursor:pointer;"type="submit" name="submit" value="Insert">
      </form>

      </div>

      <?php
    } ?>

    <?php
    if(isset($_POST['add_activity']))
    {
      ?>

      <div class="container1">


        <label style="font-size:30px; margin-left:150px;"> ADD ACTIVITY </label>
        <br>
        <br>
        <form method="post" action="addoption.php">
        <input type="text" name="activity" placeholder="Enter the activity name!">


        <input style="margin:0 auto; margin-top:10px; margin-left:230px; background:black; color:white; cursor:pointer;"type="submit" name="submit" value="ADD">
      </form>

      </div>

      <?php
    } ?>

    <?php
    if(isset($_POST['add_academic_year']))
    {
      ?>

      <div class="container1">


        <label style="font-size:30px; margin-left:100px;"> ADD ACADEMIC YEAR </label>
        <br><br><br>
        <form method="post" action="addacademic.php">


        <input type="text" name="academic_year" placeholder="yyyy-yyyy">
        <br>
        <br>



        <input style="margin:0 auto; margin-top:10px; margin-left:230px; background:black; color:white; cursor:pointer;"type="submit" name="submit" value="ADD">
      </form>

      </div>

      <?php
    } ?>

    <?php
    if(isset($_POST['add_batch']))
    {
      ?>

      <div class="container1">


        <label style="font-size:30px; margin-left:170px;"> ADD BATCH </label>
        <br><br><br>
        <form method="post" action="addbatch.php">


        <input type="text" name="batch" placeholder="yyyy-yyyy">
        <br>
        <br>



        <input style="margin:0 auto; margin-top:10px; margin-left:230px; background:black; color:white; cursor:pointer;"type="submit" name="submit" value="ADD">
      </form>

      </div>

      <?php
    } ?>

    <?php
		/*
    if(isset($_POST['delete_batch']))
    {
      ?>

      <div class="container1">


        <label style="font-size:30px; margin-left:170px;"> DELETE BATCH </label>
        <form method="post" action="delete_batch.php">
          <br><br><br>

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


        <input style="margin:0 auto; margin-top:10px; margin-left:220px; background:black; color:white; cursor:pointer;"type="submit" name="delete" value="DELETE">
      </form>

      </div>

      <?php
    }*/
		if(isset($_POST['delete_student']))
    {
      ?>

      <div class="container1">


        <label style="font-size:30px; margin-left:130px;"> DELETE STUDENT</label>
        <form method="post" action="delete_student.php">
          <br><br><br>


        <br>
				<input type="number" name="student_regno" placeholder="Enter the registration no!">
			  </input>
        <input style="margin:0 auto; margin-top:10px; margin-left:220px; background:black; color:white; cursor:pointer;"
				type="submit" name="delete" value="DELETE">
			  </input>
      </form>

      </div>

      <?php
    }
		?>

    <?php

    ?>



<br>


	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>



	</body>
	<?php

		}

		else
		{

?>

<div class="message">
	<?php
	echo "Access denied!";
	 ?>
 </div>

 <?php
	header("refresh:2;url=firstpage.php");

}
  ?>


</html>
