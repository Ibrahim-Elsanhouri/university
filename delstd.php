<?php
include './functions.php';

if (isset($_GET['idget'])){
    $idget = $_GET['idget'];
   $delete_std = "delete from std where id='$idget'";
   $run_del = mysqli_query($connect, $delete_std);
   if ($run_del){
       echo "<script>alert('student is deleted')</script>";
       echo "<script>window.open('allstd.php','_self')</script>";
   }
    
}

