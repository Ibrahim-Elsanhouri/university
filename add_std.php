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
        <title>Register a Student</title>
    </head>
    <body bgcolor="skyblue">
        <form method="POST" enctype="multipart/form-data" action="add_std.php">
            <table bgcolor="orange" border="2" width="1000" align="center">
                <thead>
                    <tr>
                        <th colspan="2">Register a new Student</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Register Number </td>
                        <td>
                            <input type="text" name="id" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td>Student Name</td>
                        <td>
                            <input type="text" name="name" value="" />
                            
                            
                        </td>
                    </tr>
                                        <tr>
                        <td>Mobile  </td>
                        <td>
                            <input type="text" name="mob" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td>Email </td>
                        <td>
                            <input type="email" name="e" value="" />
                        </td>
                    </tr>
                                        <tr>
                        <td>Semester </td>
                        <td>
                            <select name="sem">
                                
                                <option >Select a semster </option>
                                <?php 
                                global $connect;
                                $get_sem= "select * from sem ";
                                $run_sem = mysqli_query($connect, $get_sem);
                                while ($row = mysqli_fetch_array($run_sem)) {
                                    $sem_id = $row['sem_id'];
                                    $sem_title = $row['sem_title'];
                                    echo "<option value='$sem_id'>$sem_title</option>";
                                }
                               ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Image </td>
                        <td>
                            <input type="file" name="img" value="" />
                            
                        </td>
                    </tr>
                         <tr>
                             <td><input type="submit" name="re" value="Register a Students" /> </td>
                        <td>
                            <input type="reset" name="" value="Cancel" />
                            
                        </td>
                    </tr>
                    
                </tbody>
            </table>

            
            
        </form>
   
    </body>
</html>
     <?php 
        if (isset($_POST['re'])){
          
            global $connect;
            
          $name = $_POST['name'];
          $id= $_POST['id'];
            $sem=$_POST['sem'];
              $email = $_POST['e'];
            $mobile = $_POST['mob'];
            $image = $_FILES['img']['name'];
            $image_tmp = $_FILES['img']['tmp_name'];
            move_uploaded_file($image_tmp,"images/$image")
            ;
         
            $check_std="select * from std where ID='$id'";
            $run_check= mysqli_query($connect, $check_std);
            $std_count = mysqli_num_rows($run_check);
            if ($std_count>0){
                		 echo "<script>alert('student alerady registerd!')</script>";
                                 exit();
            }
            
		 $insert_std = "insert into std (ID,name,mobile,email,sem,image) values ('$id','$name','$mobile','$email','$sem','$image')";
		 
		 $insert_sd = mysqli_query($connect, $insert_std);
		 
		 if($insert_sd){
		 
		 echo "<script>alert('student Has been inserted!')</script>";
		// echo "<script>window.open('index.php?insert_produc','_self')</script>";
		 
            }
            
            
            
            
         }
        
        ?>
        