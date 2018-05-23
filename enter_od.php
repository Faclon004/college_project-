<?php
  session_start();
  if(isset($_POST['value']))
  {
    $value = $_POST['value'];
    $_SESSION['value']=$value;
  }
  ?>

<!doctype html>
<head>
  <link rel="stylesheet" href="form_border1.css">

  <?php

  if(isset($_SESSION['username']))
  { ?>
	<title>project-entryform</title>
	<div class="menu">
    <h1>ENTER OD DETAILS</h1>
    <div class="direction">
      <a href="homepage.php">HOME</a>
      >
      ENTER_OD
    </div>

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
  </div>



</head>
<body>

  <?php
    if($value !=6)
    {
  ?>
	<form method="POST" action="intodb1.php">

    <!--Student Registration number-->
    <div class="form1">
    <?php
    switch($value)
    {
        case 5:
    ?>
    <br>
        <label> 1.Student Registration number</label>
        <br>
        <input type="number" name="regno4" value="">
        <br>
        <hr>


    <?php case 4:?>
        <label><?php if($value==5) echo "2.";
                      else echo "1.";
                ?>Student Registration number
        </label><br>
        <input type="number" name="regno3"><br><hr>



    <?php  case 3:
    ?>
    <label><?php if($value==5) echo "3.";
                  else if ($value==4) echo "2.";
                  else echo "1.";
            ?>Student Registration number
    </label><br>
    <input type="number" name="regno2"><br><hr>



    <?php  case 2:
    ?>

    <label><?php if($value==5) echo "4.";
                  else if ($value==4) echo "3.";
                  else if ($value==3) echo "2.";
                  else echo "1.";
            ?>Student Registration number
    </label><br>
    <input type="number" name="regno1"><br><hr>



      <?php  case 1:?>
      <label><?php if($value==5) echo "5.";
                    else if ($value==4) echo "4.";
                    else if ($value==3) echo "3.";
                    else if ($value==2) echo "2.";
                    else echo "1.";
              ?>Student Registration number
      </label>
      <br>
      <input type="number" name="regno0" value="">
      <br>
      <hr>
    <?php
        break;
    }
    ?>



	Year:<br>
	<select name="year">
    <option value="None-selected">0</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
	</select><br/><br/><hr align="left" width="100%"/>

  Semester:<br>
	<select name="semester">
    <option value="None-selected">0</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
    <option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
	</select><br/><br/><hr align="left" width="100%"/>

  <b>Academic Year:</b><br>
  <?php

    $con = mysqli_connect("localhost","root","","college_project");

    if(!$con)
    {
      echo "Server is not connected!";
    }

    $sql = "SELECT * FROM academic_year";

    $result= mysqli_query($con,$sql);
  ?>
    <select name="academic_year">
      <option value="None-selected">0000-0000</option>

  <?php
    while($data1 = mysqli_fetch_array($result))
    {
    //  $option = $row['activity'];
  ?>


    <option value="<?php echo $data1['academic_year']; ?>">
      <?php echo $data1['academic_year']; ?>
    </option>

    <?php
  };
    ?>
  </select><br/><!--hr align="left" width="100%"/-->

</div>

  <!--Layout 2-->
 <div class="form2">
   <br>
   <br>


	<b>Activites:</b><br>

	<?php
		$sql = "SELECT * FROM activity";

		$result= mysqli_query($con,$sql);
	?>
		<select name="activity">
      <option value="None-selected">select</option>
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



	</select><br/><hr align="left" width="100%"/>



  Place:<br/>
	<input type="text" size="30" name="place" placeholder="Enter the place!"><br><br>
	<hr align="left" width="100%"/>

  Venue:<br>
	<input type="text" size="30" name="venue" placeholder="Enter the venue!"><br><br>
	<hr align="left" width="100%"/>

	Event:<br>
  <input type="text" name="event" placeholder="Enter the event name!">
  <br><br>
  <hr align="left" width="100%"/>



	Achievement:<br>
	<input type="text" size="30" name="achievements" value="NULL"><br><br>

 </div>

  <div class="form3">
    <br>
    <br>

  OD taken:<br>
		<input type="date" name="datefrom" placeholder="yyyy-mm-dd">
    </input> -
    <input type="date" name="dateto" placeholder="yyyy-mm-dd">
    </input>
    <br/>
    <br>
    <hr align="left" width="100%"/>





	For the periods:<br>
		<input type="number" name="periods" placeholder="1234567"><br/>
    <br>
    <hr align="left" widht="100%"/>




	<p>Any proof submitted?</p>
    <input style="display:none;" type="radio" name="proof" value="" checked></input>
		<input type="radio" name="proof" value="yes">Yes</input>
		<input type="radio" name="proof" value="no">No</input><br/><br/>
	<hr align="left" width="100%"/>

	<input style="background-color:black;color:white;font-family:impact;border:none; width:100px; height:30px; cursor:pointer;
                font-size:20px;border-radius:4px; "
  type="submit" value="Submit"></input>
  </div>

</form>
  <?php
    }
    else
    {
      ?>
      <form method="POST" action="intodb1.php">


        <div class="form1">

          Batch:
          <br>
          <?php

            $conn = mysqli_connect("localhost","root","","college_project");

            if(!$conn)
            {
              echo "Server is not connected!";
            }

            $sql11 = "SELECT * FROM batch ORDER BY batch DESC";

            $result11 = mysqli_query($conn,$sql11);
          ?>
            <select name="batch">
              <option value="None-selected">0000-0000</option>
          <?php
            while($data11 = mysqli_fetch_array($result11))
            {

          ?>


            <option value="<?php echo $data11['batch']; ?>">
              <?php echo $data11['batch'];  ?>
            </option>

            <?php
          };
          mysqli_close($conn);
            ?>
          </select>
          <br>
          <hr align="left" width="100%"/>

          Section:
          <br>
          <input style="display:none;" type="radio" name="section" value="" checked></input>
          <input style="margin-left:0px;"type="radio" value="A" name="section" display="inline-block">A</option>
          <input type="radio" value="B" name="section" display="inline-block">B</option>
          <input type="radio" value="C" name="section" display="inline-block">C</option>
          <br>
          <hr align="left" width="100%"/>





    	Year:<br>
    	<select name="year">
        <option value="None-selected">0</option>
    		<option value="1">1</option>
    		<option value="2">2</option>
    		<option value="3">3</option>
    		<option value="4">4</option>
    	</select><br/><br/><hr align="left" width="100%"/>

      Semester:<br>
    	<select name="semester">
        <option value="None-selected">0</option>
    		<option>1</option>
    		<option>2</option>
    		<option>3</option>
    		<option>4</option>
        <option>5</option>
    		<option>6</option>
    		<option>7</option>
    		<option>8</option>
    	</select><br/><br/><hr align="left" width="100%"/>

      <b>Academic Year:</b><br>
      <?php

        $con = mysqli_connect("localhost","root","","college_project");

        if(!$con)
        {
          echo "Server is not connected!";
        }

        $sql = "SELECT * FROM academic_year ORDER BY academic_year DESC";

        $result= mysqli_query($con,$sql);
      ?>
        <select name="academic_year">
          <option value="None-selected">0000-0000</option>

      <?php
        while($data1 = mysqli_fetch_array($result))
        {
        //  $option = $row['activity'];
      ?>


        <option value="<?php echo $data1['academic_year']; ?>">
          <?php echo $data1['academic_year']; ?>
        </option>

        <?php
      };
        ?>
      </select><br/><!--hr align="left" width="100%"/-->

    </div>

      <!--Layout 2-->
     <div class="form2">
       <br>
       <br>


    	<b>Activites:</b><br>

    	<?php
    		$sql = "SELECT * FROM activity";

    		$result= mysqli_query($con,$sql);
    	?>
    		<select name="activity">
          <option value="None-selected">select</option>
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



    	</select><br/><hr align="left" width="100%"/>



      Place:<br/>
    	<input type="text" size="30" name="place" placeholder="Enter the place!"><br><br>
    	<hr align="left" width="100%"/>

      Venue:<br>
    	<input type="text" size="30" name="venue" placeholder="Enter the venue!"><br><br>
    	<hr align="left" width="100%"/>

    	Event:<br>
      <input type="text" name="event" placeholder="Enter the event name!">
      <br><br>
      <hr align="left" width="100%"/>



    	Achievement:<br>
    	<input type="text" size="30" name="achievements" value="NULL"><br><br>

     </div>

      <div class="form3">
        <br>
        <br>

      OD taken:<br>
    		<input type="date" name="datefrom" placeholder="yyyy-mm-dd">
        </input> -
        <input type="date" name="dateto" placeholder="yyyy-mm-dd">
        </input>
        <br/>
        <br>
        <hr align="left" width="100%"/>





    	For the periods:<br>
    		<input type="number" name="periods" placeholder="1234567"><br/>
        <br>
        <hr align="left" widht="100%"/>




    	<p>Any proof submitted?</p>
        <input style="display:none;" type="radio" name="proof" value="" checked></input>
    		<input type="radio" name="proof" value="yes">Yes</input>
    		<input type="radio" name="proof" value="no">No</input><br/><br/>
    	<hr align="left" width="100%"/>

    	<input style="background-color:black;color:white;font-family:impact;border:none; width:100px; height:30px; cursor:pointer;
                    font-size:20px;border-radius:4px; "
      type="submit" value="Submit"></input>
      </div>

    </form>
    <?php
    } ?>


<br>


<?php
}

else
{
   ?>

   <div class="message">
     <?php
     echo "Access denied!"; ?>
   </div>

   <?php

   header("refresh:2;url=firstpage.php");
 }?>



</body>
</html>
