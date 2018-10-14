<?php include './functions.php';
 session_start();

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
        <title>Admin Login</title>
    </head>
    <body bgcolor="skyblue">
        <form method="POST" enctype="multipart/form-data">
            <table border="2" align="center" width="750" bgcolor="white">
                <thead>
                    <tr>
                        <th colspan="2"><h1>Admin Login</h1></th>
                      
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Username</td>
                        <td>
                            <input type="text" name="user" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>
                            <input type="text" name="pass" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Login to Admin Panel" name="log" />
                        </td>
                    </tr>
                </tbody>
            </table>

        </form>
        <?php 
        global $connect;
        if (isset($_POST['log'])){
            $username= ($_POST['user']);
            $password= ($_POST['pass']);
            $check_admin= "select * from admin where username='$username' and password='$password'";
            $run_check = mysqli_query($connect, $check_admin);
            $run_count = mysqli_num_rows($run_check);
            if ($run_count==1){
                           $_SESSION['username']=$username;
                    echo "<script>window.open('adminpanel.php','_self')</script>";
                
            }else{
                echo "<script>alert('invalid username or password')</script>";

            }
        }
        
        
        
        
        
        
        ?>
    </body>
</html>
