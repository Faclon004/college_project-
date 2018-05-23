<?php
session_start();
//$value = $_SESSION['students'];
  $value=$_SESSION['value'];
  $i=0;
  $flag = 0;

//Storing the DATA from FORM in temporary variable
?>
<!doctype html>
<style>
.error-message
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

};

.background
{
  background-color:#e3e3e3;
  width:1500px;
  height:1500px
}

body{
  background-image: url("img/dark.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}


</style>

<?php
switch($value)
{
  case 1:
  if($_POST['regno0'] == "" || $_POST['event'] == NULL || $_POST['venue'] == NULL|| $_POST['place'] == NUll ||
     $_POST['datefrom'] == NULL || $_POST['dateto'] == NULL || $_POST['periods'] == NULL ||  $_POST['year'] == "None-selected"
     || $_POST['semester'] == "None-selected" || $_POST['academic_year'] == "None-selected"
     || $_POST['activity'] == "None-selected" || $_POST['proof'] == "")
   {
     ?>
     <div class="error-message">
       Data(s) are missing!
     </div>
     <?php
     header("refresh:2;url=homepage.php");
   }

   //validating year and semester
   else if($_POST['year'] != "None-selected")
   {
     switch($_POST['year'])
     {


       case 1:
       if($_POST['semester'] == 1 || $_POST['semester'] == 2)
       {
         ++$flag;
       }
       else
       {
         ?>
         <div class="error-message">
           Semester can be 1 or 2 for the given year!
         </div>
         <?php
         header("refresh:3;url=enter_od.php");
       }
       break;


       case 2:
       if($_POST['semester'] == 3 || $_POST['semester'] == 4)
       {
         ++$flag;
       }
       else
       {
         ?>
         <div class="error-message">
           Semester can be 3 or 4 for the given year!
         </div>
         <?php
         header("refresh:3;url=enter_od.php");

       }
       break;


       case 3:
       if($_POST['semester'] == 5 || $_POST['semester'] == 6)
       {
         ++$flag;
       }
       else
       {
         ?>
         <div class="error-message">
           Semester can be 5 or 6 for the given year!
         </div>
         <?php
         header("refresh:3;url=enter_od.php");

       }
       break;


       case 4:
       if($_POST['semester'] == 7 || $_POST['semester'] == 8)
       {
         ++$flag;
       }
       else
       {
         ?>
         <div class="error-message">
           Semester can be 7 or 8 for the given year!
         </div>
         <?php
         header("refresh:3;url=enter_od.php");

       }
       break;


     }
   }


   else
    {
     ++$flag;
   }
   break;

   case 2:
   if($_POST['regno0'] == "" || $_POST['regno1'] == NULL || $_POST['event'] == NULL || $_POST['venue'] == NULL|| $_POST['place'] == NUll
      || $_POST['datefrom'] == NULL || $_POST['dateto'] == NULL || $_POST['periods'] == NULL || $_POST['year'] == "None-selected"
      || $_POST['semester'] == "None-selected" || $_POST['academic_year'] == "None-selected"
      || $_POST['activity'] == "None-selected" || $_POST['proof'] == "")
    {
      ?>
      <div class="error-message">
        Data(s) are missing!
      </div>
      <?php
      header("refresh:3;url=homepage.php");
    }

    //validating year and semester
    else if($_POST['year'] != "None-selected")
    {
      switch($_POST['year'])
      {


        case 1:
        if($_POST['semester'] == 1 || $_POST['semester'] == 2)
        {
          ++$flag;
        }
        else
        {
          ?>
          <div class="error-message">
            Semester can be 1 or 2 for the given year!
          </div>
          <?php
          header("refresh:3;url=enter_od.php");
        }
        break;


        case 2:
        if($_POST['semester'] == 3 || $_POST['semester'] == 4)
        {
          ++$flag;
        }
        else
        {
          ?>
          <div class="error-message">
            Semester can be 3 or 4 for the given year!
          </div>
          <?php
          header("refresh:3;url=enter_od.php");

        }
        break;


        case 3:
        if($_POST['semester'] == 5 || $_POST['semester'] == 6)
        {
          ++$flag;
        }
        else
        {
          ?>
          <div class="error-message">
            Semester can be 5 or 6 for the given year!
          </div>
          <?php
          header("refresh:3;url=enter_od.php");

        }
        break;


        case 4:
        if($_POST['semester'] == 7 || $_POST['semester'] == 8)
        {
          ++$flag;
        }
        else
        {
          ?>
          <div class="error-message">
            Semester can be 7 or 8 for the given year!
          </div>
          <?php
          header("refresh:3;url=enter_od.php");

        }
        break;


      }
    }


    else
     {
      ++$flag;
    }
    break;

    case 3:
    if($_POST['regno0'] == "" || $_POST['regno1'] == NULL || $_POST['regno2'] == NULL || $_POST['event'] == NULL
       || $_POST['venue'] == NULL || $_POST['place'] == NUll || $_POST['datefrom'] == NULL || $_POST['dateto'] == NULL
       || $_POST['periods'] == NULL || $_POST['year'] == "None-selected" || $_POST['semester'] == "None-selected"
       || $_POST['academic_year'] == "None-selected" || $_POST['activity'] == "None-selected" || $_POST['proof'] == "")
     {
       ?>
       <div class="error-message">
         Data(s) are missing!
       </div>
       <?php
       header("refresh:3;url=homepage.php");
     }

     //validating year and semester
     else if($_POST['year'] != "None-selected")
     {
       switch($_POST['year'])
       {


         case 1:
         if($_POST['semester'] == 1 || $_POST['semester'] == 2)
         {
           ++$flag;
         }
         else
         {
           ?>
           <div class="error-message">
             Semester can be 1 or 2 for the given year!
           </div>
           <?php
           header("refresh:3;url=enter_od.php");
         }
         break;


         case 2:
         if($_POST['semester'] == 3 || $_POST['semester'] == 4)
         {
           ++$flag;
         }
         else
         {
           ?>
           <div class="error-message">
             Semester can be 3 or 4 for the given year!
           </div>
           <?php
           header("refresh:3;url=enter_od.php");

         }
         break;


         case 3:
         if($_POST['semester'] == 5 || $_POST['semester'] == 6)
         {
           ++$flag;
         }
         else
         {
           ?>
           <div class="error-message">
             Semester can be 5 or 6 for the given year!
           </div>
           <?php
           header("refresh:3;url=enter_od.php");

         }
         break;


         case 4:
         if($_POST['semester'] == 7 || $_POST['semester'] == 8)
         {
           ++$flag;
         }
         else
         {
           ?>
           <div class="error-message">
             Semester can be 7 or 8 for the given year!
           </div>
           <?php
           header("refresh:3;url=enter_od.php");

         }
         break;


       }
     }


     else
      {
       ++$flag;
     }
     break;

     case 4:
     if($_POST['regno0'] == "" || $_POST['regno1'] == NULL || $_POST['regno2'] == NULL  ||  $_POST['regno3'] == NULL
        || $_POST['place'] == NUll || $_POST['datefrom'] == NULL || $_POST['dateto'] == NULL || $_POST['periods'] == NULL
        || $_POST['event'] == NULL ||$_POST['venue'] == NULL || $_POST['year'] == "None-selected"
        || $_POST['semester'] == "None-selected" || $_POST['academic_year'] == "None-selected"
        || $_POST['activity'] == "None-selected" || $_POST['proof'] == "")
      {
        ?>
        <div class="error-message">
          Data(s) are missing!
        </div>
        <?php
        header("refresh:3;url=homepage.php");
      }

      //validating year and semester
      else if($_POST['year'] != "None-selected")
      {
        switch($_POST['year'])
        {


          case 1:
          if($_POST['semester'] == 1 || $_POST['semester'] == 2)
          {
            ++$flag;
          }
          else
          {
            ?>
            <div class="error-message">
              Semester can be 1 or 2 for the given year!
            </div>
            <?php
            header("refresh:3;url=enter_od.php");
          }
          break;


          case 2:
          if($_POST['semester'] == 3 || $_POST['semester'] == 4)
          {
            ++$flag;
          }
          else
          {
            ?>
            <div class="error-message">
              Semester can be 3 or 4 for the given year!
            </div>
            <?php
            header("refresh:3;url=enter_od.php");

          }
          break;


          case 3:
          if($_POST['semester'] == 5 || $_POST['semester'] == 6)
          {
            ++$flag;
          }
          else
          {
            ?>
            <div class="error-message">
              Semester can be 5 or 6 for the given year!
            </div>
            <?php
            header("refresh:3;url=enter_od.php");

          }
          break;


          case 4:
          if($_POST['semester'] == 7 || $_POST['semester'] == 8)
          {
            ++$flag;
          }
          else
          {
            ?>
            <div class="error-message">
              Semester can be 7 or 8 for the given year!
            </div>
            <?php
            header("refresh:3;url=enter_od.php");

          }
          break;


        }
      }

      else {
        ++$flag;
      }
      break;

      case 5:
      if($_POST['regno0'] == "" || $_POST['regno1'] == NULL || $_POST['regno2'] == NULL  ||  $_POST['regno3'] == NULL
         || $_POST['regno4'] == NULL || $_POST['place'] == NUll || $_POST['datefrom'] == NULL || $_POST['dateto'] == NULL
         || $_POST['periods'] == NULL || $_POST['event'] == NULL || $_POST['venue'] == NULL || $_POST['year'] == "None-selected"
         || $_POST['semester'] == "None-selected" || $_POST['academic_year'] == "None-selected"
         || $_POST['activity'] == "None-selected" || $_POST['proof'] == "")
       {
         ?>
         <div class="error-message">
           Data(s) are missing!
         </div>
         <?php
         header("refresh:3;url=homepage.php");
       }

       //validating year and semester
       else if($_POST['year'] != "None-selected")
       {
         switch($_POST['year'])
         {


           case 1:
           if($_POST['semester'] == 1 || $_POST['semester'] == 2)
           {
             ++$flag;
           }
           else
           {
             ?>
             <div class="error-message">
               Semester can be 1 or 2 for the given year!
             </div>
             <?php
             header("refresh:3;url=enter_od.php");
           }
           break;


           case 2:
           if($_POST['semester'] == 3 || $_POST['semester'] == 4)
           {
             ++$flag;
           }
           else
           {
             ?>
             <div class="error-message">
               Semester can be 3 or 4 for the given year!
             </div>
             <?php
             header("refresh:3;url=enter_od.php");

           }
           break;


           case 3:
           if($_POST['semester'] == 5 || $_POST['semester'] == 6)
           {
             ++$flag;
           }
           else
           {
             ?>
             <div class="error-message">
               Semester can be 5 or 6 for the given year!
             </div>
             <?php
             header("refresh:3;url=enter_od.php");

           }
           break;


           case 4:
           if($_POST['semester'] == 7 || $_POST['semester'] == 8)
           {
             ++$flag;
           }
           else
           {
             ?>
             <div class="error-message">
               Semester can be 7 or 8 for the given year!
             </div>
             <?php
             header("refresh:3;url=enter_od.php");

           }
           break;


         }
       }



       else
       {
         ++$flag;
       }
       break;

       case 6:
       if($_POST['place'] == NUll || $_POST['datefrom'] == NULL || $_POST['dateto'] == NULL
          || $_POST['periods'] == NULL || $_POST['event'] == NULL || $_POST['section'] == ""
          || $_POST['venue'] == NULL || $_POST['year'] == "None-selected" || $_POST['batch'] == "None-selected"
          || $_POST['semester'] == "None-selected" || $_POST['academic_year'] == "None-selected"
          || $_POST['activity'] == "None-selected" || $_POST['proof'] == "")
        {
          ?>
          <div class="error-message">
            Data(s) are missing!
          </div>
          <?php
          header("refresh:3;url=homepage.php");
        }

        else if($_POST['year'] != "None-selected")
        {
          switch($_POST['year'])
          {


            case 1:
            if($_POST['semester'] == 1 || $_POST['semester'] == 2)
            {
              ++$flag;
            }
            else
            {
              ?>
              <div class="error-message">
                Semester can be 1 or 2 for the given year!
              </div>
              <?php
              header("refresh:3;url=enter_od.php");
            }
            break;


            case 2:
            if($_POST['semester'] == 3 || $_POST['semester'] == 4)
            {
              ++$flag;
            }
            else
            {
              ?>
              <div class="error-message">
                Semester can be 3 or 4 for the given year!
              </div>
              <?php
              header("refresh:3;url=enter_od.php");

            }
            break;


            case 3:
            if($_POST['semester'] == 5 || $_POST['semester'] == 6)
            {
              ++$flag;
            }
            else
            {
              ?>
              <div class="error-message">
                Semester can be 5 or 6 for the given year!
              </div>
              <?php
              header("refresh:3;url=enter_od.php");

            }
            break;


            case 4:
            if($_POST['semester'] == 7 || $_POST['semester'] == 8)
            {
              ++$flag;
            }
            else
            {
              ?>
              <div class="error-message">
                Semester can be 7 or 8 for the given year!
              </div>
              <?php
              header("refresh:3;url=enter_od.php");

            }
            break;


          }
        }

        else {
          ++$flag;
        }
        break;

}


if($flag > 0)
{
  $activity = $_POST['activity'];
  $event = $_POST['event'];
  $venue = $_POST['venue'];
  $place = $_POST['place'];
  $achievements = $_POST['achievements'];
  $proof = $_POST['proof'];
  $academic_year = $_POST['academic_year'];
  $datefrom = $_POST['datefrom'];
  $dateto = $_POST['dateto'];
  $semester = $_POST['semester'];
  $year = $_POST['year'];
  $int_periods = $_POST['periods'];
  //adding "," to the periods
  $len_periods = strlen($int_periods);
  $periods = $int_periods[0];
  for($a = 1;$a<$len_periods; $a++)
  $periods .= "," . $int_periods[$a];






	$con = mysqli_connect('127.0.0.1','root',"",'college_project');
  switch($value)
  {
      case 6:
      break;

      case 5:
      $regno[$i++]=$_POST['regno4'];

      case 4:
      $regno[$i++]=$_POST['regno3'];

      case 3:
      $regno[$i++]=$_POST['regno2'];

      case 2:
      $regno[$i++]=$_POST['regno1'];

      case 1:
      $regno[$i++]=$_POST['regno0'];
      break;


  }
  $i=0;

  if($value !=6)
  {
  while($i<$value)
  {
    //getting the details of a studen from student_detail table
    $sql1 = "SELECT * FROM student_detail where  student_registration_number = $regno[$i]";

    $check1 = mysqli_query($con,$sql1);
    $chek = mysqli_query($con,$sql1);

    $d=0;
    while(mysqli_fetch_array($chek))
    {
      ++$d;
    }
    if($d==0)
    {
      ?>
      <div class="error-message">
        <?php
        echo "No Data for $regno[$i] exist!";
         ?>
       </div>
       <?php
       ++$i;
       header("refresh:2;url=homepage.php");

    }
    else
    {

    while($data = mysqli_fetch_array($check1))
      {
        //storing the student_detail table data in variables
        $name = $data['student_name'];
        $batch = $data['batch'];
        $section= $data['section'];

      }


    //Inserting the values from the FORM into the od_detail table
    $sql2 = "INSERT INTO od_details (batch,student_name,student_registration_number,year,semester,section,activity,event,achievements,place,venue,from_date,to_date,periods,proof,academic_year) VALUES
              ('$batch','$name','$regno[$i]','$year','$semester','$section','$activity','$event','$achievements','$place','$venue','$datefrom','$dateto','$periods','$proof','$academic_year')";
    $i++;

    //Checking whether data is inserted
    if(!mysqli_query($con,$sql2))
    {
    ?>
    <div class="background">
    <div class="message">
    <?php
      echo "OD details not inserted for Student $i!";
    ?>
    </div>
    <?php
    }

    else
    {
    ?>
    <div class="error-message">
      <?php
      echo "OD details inserted for Student $i!";
      ?>
    </div>
  </div>
    <?php
    }
  }
 }
}

else
{
  $batch = $_POST['batch'];
  $section = $_POST['section'];
  $count_query = "SELECT COUNT(*) FROM student_detail WHERE batch = '$batch' AND
                  section = '$section'";
  $count_sql = mysqli_query($con,$count_query);
  $count_row = mysqli_fetch_array($count_sql);
  $count_result = $count_row['COUNT(*)'];
  if($count_result == 0)
  {
    ?>
    <div class="error-message">
      No class is found!
    </div>
    <?php
  }

  else
  {
    $i = 0;
    $select_query = "SELECT * FROM student_detail WHERE batch = '$batch' AND
                     section = '$section' ORDER BY student_registration_number";
    $select_sql = mysqli_query($con,$select_query);
    while($select_result = mysqli_fetch_array($select_sql))
    {
      $number = $select_result['student_registration_number'];
      $name = $select_result['student_name'];
      $insert_query = "INSERT INTO od_details (batch,student_name,student_registration_number,year,semester,
                       section,activity,event,achievements,place,venue,from_date,to_date,periods,proof,academic_year)
                       VALUES ('$batch','$name','$number','$year','$semester','$section','$activity','$event','$achievements',
                       '$place','$venue','$datefrom','$dateto','$periods','$proof','$academic_year')";

      if(mysqli_query($con,$insert_query))
      {
      ++$i;
      }
      else
      {
        echo "Error";
      break;
    }

     }


     if($i == $count_result)
     {
     ?>
     <div class="error-message">
       Data(s) inserted!
     </div>
     <?php
    }

   }
  }
}
  header("refresh:7;url=homepage.php");


  ?>
