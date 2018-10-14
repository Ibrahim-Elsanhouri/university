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
        <title>Clients Query</title>
    </head>
    <body  bgcolor="brown">
        <table align="center" bgcolor="white" border="1">
            <thead>
                <tr>
                    <th colspan="6">All Queries </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                       <td>Subject</td>
                    <td>Messege</td>
                    <td>Query Date</td>
                    <td>Delete</td>
                </tr>
         <?php 
         global $connect;
         $get_query ="select * from contact";
         $run_getquery= mysqli_query($connect, $get_query);
         while ($row_query = mysqli_fetch_array($run_getquery)) {
             $name = $row_query['name'];
             $email = $row_query['email'];
             $sub = $row_query['sub'];
             $messege = $row_query['messege'];
             $date = $row_query['date'];
         
         
         
         ?>
            <td><?php echo $name; ?></td>      
             <td><?php echo $email; ?></td>    
             <td><?php          echo $sub;?></td> 
             <td><?php echo $messege; ?></td> 
             <td><?php echo $date; ?></td>
             <td>
                 <a href="delq.php?date=<?php echo $date ?>">Delete</a>
             </td>
            </tbody>
         <?php } ?>
        </table>

    </body>
</html>
