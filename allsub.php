<?php include './functions.php';?>
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
    <body>
       

        <form method="POST">
            <table align="center" border="1" width="500">
                <thead>
                    <tr>
                        <th colspan="2"><h2>All Subjects </h2></th>
                        
                    </tr>
                </thead>
                <?php 
                global $connect;
                $get_allsub="select * from subjects ";
                $runget = mysqli_query($connect, $get_allsub);
                while ($row_runget = mysqli_fetch_array($runget)) {
                    $subsem = $row_runget['sem_id'];
                    
                   $subname = $row_runget['sem_subject'];
                    
                
                
                
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $subsem; ?></td>
                        <td><?php  echo $subname;?></td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
                

            
            
        </form>
    </body>
</html>
