<?php
  session_start();
  $academic = $_SESSION['academic_year'];
  $activity = $_SESSION['activity'];
  $sem = $_SESSION['semester'];
  unset($_SESSION['academic_year']);
  unset($_SESSION['activity']);
  unset($_SESSION['semester']);

  $con= mysqli_connect("localhost","root","","college_project");
  if($sem == 'odd')
  {
    $sql = "SELECT student_registration_number,student_name,year,semester,section,academic_year,activity,
          event,venue,place,from_date,to_date,periods FROM od_details WHERE academic_year = '$academic'
          AND activity = '$activity' AND (semester = 1 or semester = 3 or semester = 5 or semester =7)
          order by year ";
  }
  else
  {
    $sql = "SELECT student_registration_number,student_name,year,semester,section,academic_year,activity,
            event,venue,place,from_date,to_date,periods FROM od_details WHERE academic_year = '$academic'
            AND activity = '$activity' AND (semester = 2 or semester = 4 or semester = 6 or semester =8)
            order by year ";
  }
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
  header("Content-Disposition: attachment; filename=event_report.xls");
  header("Pragma: no-cache");
  header("Expires:0");
  print"$columnheader\n$setdata";
  mysqli_close($con);

?>
