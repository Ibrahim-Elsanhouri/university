<?php include './functions.php'; ?>
<!DOCTYPE html>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bangalore University</title>
    </head>
    <body bgcolor="silver ">
        <table bgcolor="brown" align="center" border="5" width="1000">
            <thead>
                <tr >
                    <td align="center" colspan="7"><h2>All blogger Posts</h2> </td>
                </tr>
                <tr>
                    <th>post ID </th>
                    <th>post title</th>
                    <th>post admin</th>
                    <th>post date</th>
                    <th>post image</th>
                    <th>post paragraph </th>
                    <th>Delete a post</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                global $connect;
                $get_allposts = "select * from blog";
                $run_post = mysqli_query($connect, $get_allposts);
                while ($row_getallposts = mysqli_fetch_array($run_post)) {
                    $blogid=$row_getallposts['blogid'];
                    $title = $row_getallposts['title'];
                    $admin = $row_getallposts['admin'];
                       $date=$row_getallposts['date'];
                    $image= $row_getallposts['image'];
                    $para= $row_getallposts['para'];
                
                
                
                ?>
                <tr>
                    <td><?php echo $blogid ?></td>
                    <td><?php echo $title ?></td>
                    <td><?php echo $admin; ?></td>
                    <td><?php echo $date ?></td>
                    <td>
                        <img src="images/<?php $image;?>" width="200" height="200"/>

                        
                    </td>
                    <td><?php echo $para ?></td>
                    <td>
                        <a href="delpost.php?postid=<?php echo $blogid?>">Delete </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

    </body>
</html>
