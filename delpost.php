<?php 
include './functions.php';
if (isset($_GET['postid'])){
    global $connect;
    $post_id = $_GET['postid'];
    $del_post = "delete from blog where blogid='$post_id'";
    $run_delpost = mysqli_query($connect, $del_post);
    if ($run_delpost){
        echo 'post is deleted';
    }
}

