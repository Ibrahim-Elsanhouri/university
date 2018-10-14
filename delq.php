<?php
include './functions.php';
if (isset($_GET['date'])){
    global $connect;
    $sp_date = $_GET['date'];
    $delete_query = "delete from contact where date='$sp_date'";
    $rundelete = mysqli_query($connect, $delete_query);
    if ($rundelete){
        echo "<script>alert('query is deleted ')</script>";
        echo "<script>window.open('allq.php','_self')</script>";
    }
}



?>