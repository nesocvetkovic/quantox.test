<?php
require("dbconnect.php");
Nenad
$student = isset($_GET['student'])&&is_numeric($_GET['student'])?$_GET['student']:0;
$q = mysqli_query($conn,"SELECT * FROM students where id = $student");
while ($rw = mysqli_fetch_object($q)) {
    $studentID = $rw->id;
    $studentName = $rw->name;
    $grade1 = $rw->grade1;
    $grade2 = $rw->grade2;
    $grade3 = $rw->grade3;
    $grade4 = $rw->grade4;

    $a = array ($grade1, $grade2, $grade3, $grade4);
    $highest = max($a);

    $final = "";
    if($highest>8){ $final = "Pass";
    }else{
      $final = "Fail";};
  };

  $returnData = array(
    "id" => $studentID,
    "name" => $studentName,
    "grade1" => $grade1,
    "grade2" => $grade2,
    "grade3" => $grade3,
    "grade4" => $grade4,
    "final" => $final
  );
