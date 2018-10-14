<?php include './functions.php';  ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>result</title>
    </head>
    <body bgcolor="brown">
        <form method="POST" enctype="multipart/form-data">
            
            <table align="center" bgcolor="white" border="2" width="800">
                <thead>
                    <tr>
                        <th colspan="2">ADD RESULT SEMESTER 1</th>
               
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Register Number </td>
                        <td>
                     <select name="reg">

       <?php 
                        global $connect;
                        $get_id = "select * from std where sem='1'";
                        $run_get_id = mysqli_query($connect, $get_id);
                        while ($row_get_id = mysqli_fetch_array($run_get_id)) {
                            $reg_no = $row_get_id['id'];
                        echo "<option value='$reg_no'>$reg_no</option>";}
                            ?>

</select>
                        </td>
                    </tr>
                    <tr>
                        <td>Subject</td>
                        <td>
                                                 <select name="sub">
                                                     <option>Subjects</option>

       <?php 
                        global $connect;
                        $get_subject = "select * from subjects where sem_id='1'";
                        $run_get_subject = mysqli_query($connect, $get_subject);
                        while ($row_get_subject = mysqli_fetch_array($run_get_subject)) {
                            $subject = $row_get_subject['sem_subject'];
                        echo "<option value='$subject'>$subject</option>";}
                            ?>
                                                     

</select>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>Mark </td>
                        <td>
                            <input type="number" name="mark" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="">
                            <input type="submit" value="Submit Subject Mark" name="addmark" />
                        </td>
                       
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        
            
          
        </form>
    <?php 
if (isset($_POST['addmark'])){
                    global $connect;
                    
$subjects = $_POST['sub'];
$register_number = $_POST['reg'];
$marks = $_POST['mark'];

if ($marks>69){
    $char ='A';
}else if ($marks>50 && $marks <70) {
$char='B';    
}else{
  $char='F';    
}
$submit_subject = "insert into result (ID,sub_title,sub_mark,sub_grade) values ('$register_number','$subjects','$marks','$char')";
$run_submit_subject = mysqli_query($connect, $submit_subject);
 echo " <a href='test.php?reg_no=$register_number'>Generate Result</a> ";
if ($run_submit_subject){
    echo 'subject mark is submitted';
   
}

    

}
?>

        
        
        
    </body>
</html>
