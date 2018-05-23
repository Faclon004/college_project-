<?php
  session_start();
  $academic = $_SESSION['academic_year'];
  $semester = $_SESSION['semester'];
  $year = $_SESSION['year'];
  unset($_SESSION['academic_year']);
  unset($_SESSION['semester']);
  unset($_SESSION['year']);
  $con = mysqli_connect("localhost","root","","college_project");
  $sql = "SELECT student_registration_number,student_name,year,semester,section,academic_year,activity,
        event,venue,place,from_date,to_date,periods FROM od_details WHERE academic_year = '$academic'
        AND year = $year  AND semester = $semester order by student_registration_number";

  $result = mysqli_query($con,$sql);
  $columnheader = '';
  $columnheader = "Reg.No"."\t"."Name"."\t"."Year"."\t"."Semester"."\t"."Section"."\t"."Academic year"."\t"
                   ."Activity"."\t"."Event"."\t"."Venue"."\t"."Place"."\t"."From"."\t"."To"."\t"."Periods";
  $setdata ='';
  while($data = mysqli_fetch_row($result))
  {
    $rowdata ='';
    foreach($data as $value)
    {
      $value = '"' . $value . '"' . "\t";
      $rowdata .=$value;
    }
    $setdata .=$rowdata."\n";
  }


  header("Content-type: application/octet-stream");
  header("Content-Disposition: attachment; filename=year_report.xls");
  header("Pragma: no-cache");
  header("Expires:0");
  print"$columnheader\n$setdata";
  mysqli_close($con);

   ?>
