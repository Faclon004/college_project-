<?php
  session_start();
  $number = $_SESSION['registration_number'];
  $semester = $_SESSION['semester'];
  unset($_SESSION['registration_number']);
  unset($_SESSION['semester']);
  $con = mysqli_connect("localhost","root","","college_project");
  $sql = "SELECT student_registration_number,student_name,year,semester,
          section,academic_year,activity,event,place,venue,from_date,to_date,
          achievements,proof,periods FROM od_details WHERE student_registration_number =
          $number AND semester = $semester";
  $result = mysqli_query($con,$sql);
  $columnheader = '';
  $columnheader = "Reg.No"."\t"."Name"."\t"."Year"."\t"."Semester"
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
  header("Content-Disposition: attachment; filename=student_report.xls");
  header("Pragma: no-cache");
  header("Expires:0");
  print"$columnheader\n$setdata";
  mysqli_close($con);
?>
