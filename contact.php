<!DOCTYPE html>
<?php include './functions.php';?>
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
    <body bgcolor="brown">
        <form method="POST" enctype="multipart/form-data">
     
        <table align="center" width="750" bgcolor="white" border="3">
            <thead>
                <tr>
                    <th colspan=>Contact Our University </th>
                    <th>
                        <img src="images/ban.jpg"/>

                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Name </td>
                    <td>
                        <input type="text" name="n" value="" />
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="text" name="e" value="" />
                    </td>
                </tr>
                <tr>
                   
                    <td>Subject</td>
                    <td>
                        <input type="text" name="s" value="" />
                    </td> 
                    
                </tr>
                
                   <tr>
                   
                    <td>Messege</td>
                    <td>
                        <input type="text" name="mes" value="" />
                    </td> 
                    
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Submit Query " name="q" />
                    </td>
                    <td>
                        <input type="submit" value="Cancel Query " />
                    </td>
                </tr>
                
                   </form>
                <?php 
                if (isset($_POST['q'])){
                    global $connect;


                    $namess = $_POST['n'];
                $emails = $_POST['e'];
                $sub = $_POST['s'];
                $mes = $_POST['mes'];
$add_query = "insert into contact (name,email,sub,messege) values ('$namess','$emails','$sub','$mes')";   
$run_addq = mysqli_query($connect, $add_query);
if ($run_addq){
    echo "<script>alert('the query is submitted')</script>";
    echo "<script>window.open('index.php','_self')</script>";
                }}
                ?>
                
                
                
            </tbody>
        </table>

    </body>
</html>
