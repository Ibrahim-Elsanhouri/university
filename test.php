<?php
include './functions.php';
if (isset($_GET['reg_no'])){
    global $connect;
    $idg = $_GET['reg_no'];
   $sub= total_subject();
   $ma = total_mark();
   echo $sub;
   echo "<br>";
   echo $ma;
   $avg=$ma/$sub;
   echo "<br>";
   echo $avg;
if ($avg>69){
    $grade ='first class';
}else if ($avg>50 && $avg <70) {
$grade='second class ';    
}else{
  $grade='Fail ';    
}
   $generate_result="insert into grade (ID,total,grade) values ('$idg','$ma','$grade')";
   $run_generate_result = mysqli_query($connect, $generate_result);
   if ($run_generate_result){
       echo "<script>alert('result is generated )</script>";
   }

}
