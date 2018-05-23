<?php
  session_start();
  $year =  $_SESSION['year'];
  $batch = $_SESSION['batch'];
  $semester = $_SESSION['semester'];
  $section = $_SESSION['section'];
  unset($_SESSION['year']);
  unset($_SESSION['batch']);
  unset($_SESSION['semester']);
  unset($_SESSION['section']);
  $con = mysqli_connect("localhost","root","","college_project");
  $sql = "SELECT student_registration_number,student_name,batch,year,semester,
          section,academic_year,activity,event,place,venue,from_date,to_date,
          achievements,proof,periods FROM od_details WHERE batch = '$batch' AND
          semester = $semester AND section = '$section'
          ORDER BY student_registration_number";
  $result = mysqli_query($con,$sql);
  $columnheader = '';
  $columnheader = "Reg.No"."\t"."Name"."\t"."Batch"."\t"."Year"."\t"."Semester"
                  ."\t"."Section"."\t"."Academic year"."\t"."Activity"."\t"
                  ."Event"."\t"."Place"."\t"."Venue"."\t"."From"."\t"."To"."\t"
                  ."Achievement"."\t"."Proof"."\t"."Periods";
  $setdata = '';
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
  header("Content-Disposition: attachment; filename=class_report.xls");
  header("Pragma: no-cache");
  header("Expires:0");
  print"$columnheader\n$setdata";
  mysqli_close($con);

   ?>
