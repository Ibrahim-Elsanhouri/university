<?php 
include './functions.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body bgcolor="green">
        <table align="center" border="3" width="700">
            <thead>
                <tr>
                    <th>register number</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>E-mail</th>
                    <th>Semster</th>
                    <th>Image</th>
                    <th>Registerion Date</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                global $connect;
                $get_allstd = "select * from std";
                $run_getallstd = mysqli_query($connect, $get_allstd);
                while ($row_getallstd = mysqli_fetch_array($run_getallstd)) {
                    $id= $row_getallstd['id'];
                    $name = $row_getallstd['name'];
                    $mob = $row_getallstd['mobile'];
                    $e = $row_getallstd['email'];
                    $sem = $row_getallstd['sem'];
                    $img = $row_getallstd['image'];
                   $data=$row_getallstd['reg_date'];
                    
                
                ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $name;?></td>
                    <td><?php echo $mob ?></td>
                    <td><?php echo $e ?></td>
                    <td><?php echo $sem ?></td>
                    <td>
                        <img src="images/<?php echo $img ?>" width="180" height="180"/>

                        
                    </td>
                    <td><?php echo $data ?></td>
                    <td>
                        <a href="upstd.php?idget=<?php echo $id ?>">Update</a>
                    </td>
                    <td>
                        <a href="delstd.php?idget=<?php echo $id; ?>">Delete</a>  
                    </td>
            <?php }?>
                </tr>
            </tbody>
        </table>
    
     

    </body>
</html>
