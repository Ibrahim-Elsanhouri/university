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
        <title>ADDING SUBJECT</title>
    </head>
    <body bgcolor="green">
        <form method="POST" enctype="multipart/form-data">
            <table border="3" align="center">
                <thead>
                    <tr>
                        <th colspan="2">Insert a New Subject to Syllabus</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            Semster 
                        </td>
                        <td><select name="subsem">
                                <option>Select a semster </option>
                        <?php 
                        global $connect;
                        $get_semster = "select * from sem ";
                        $running = mysqli_query($connect, $get_semster);
                        while ($row_sem = mysqli_fetch_array($running)) {
                        $semid=$row_sem['sem_id'];
                        $title = $row_sem['sem_title'];
                        echo "<option value='$semid'>$title</option>";
                        
                        }
                        
                        ?>
                            </select>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>Subject Title</td>
                        <td>
                            <input type="text" name="subtitle" value="" />
                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Add a Subject"  name="sub"/>
                        </td>
                    </tr>
                </tbody>
            </table>
<?php
if (isset($_POST['sub'])){
                        global $connect;
                        $sid= $_POST['subsem'];
                        $tit= $_POST['subtitle'];
                        $insert_subject = "insert into subjects (sem_id,sem_subject) values ('$sid','$tit')";
                        $run_insert = mysqli_query($connect, $insert_subject);
                        if ($run_insert){
                            echo "<script>alert('subject is inserted into syllabus ')</script>";
}}
                        
?>
            
        </form>
    </body>
</html>
