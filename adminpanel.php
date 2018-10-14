<!DOCTYPE html>
<?php 
session_start(); 

if(isset($_SESSION['username'])){
    $get_sess = $_SESSION['username'];
	
	echo $get_sess  ;
}
else {
	echo "<script>window.open('login.php','_self')</script>";

}
?>
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
    <body bgcolor="skyblue">
        <table bgcolor="orange" align="center" border="0" width="750">
        
            <tbody>
                <tr>
                    <td>
                        <a href="std_panel.php">Student Management</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="sub_panel.php">Subject Management</a></td>
                </tr>
                <tr>
                    <td>
                        <a href="">Result Management</a> </td>
                </tr>
                <tr><td>
                        <a href="">Degree Management</a></td>
                </tr>
                <tr>
                    <td><a href="manblog.php">Blogging Management</a></td>
                    
                </tr>
                <tr><td>
                        <a href="logout.php">Logout</a></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
            </tbody>
        </table>

    </body>
</html>
