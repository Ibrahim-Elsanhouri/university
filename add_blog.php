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
    <body bgcolor="silver">
        <form method="POST" enctype="multipart/form-data">
            <table align="center" bgcolor="brown" border="3" width="1000">
                <thead>
                    <tr>
                        <th colspan="2">Add a new Post</th>
                     
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>blog title </td>
                        <td>
                            <input type="text" name="title" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td>admin
                            
                        </td>
                        <td>
                        
                            <select name="admin">
                                <option value="">Written by </option>
                                    <?php 
                            global $connect;
                            $get_admin="select * from admin";
                            $run_get_admin = mysqli_query($connect, $get_admin);
                            while ($row_get_admin = mysqli_fetch_array($run_get_admin)) {
                                $usernames = $row_get_admin['username'];
                                echo "<option value='$usernames'>$usernames</option>";
                            
                            }   
                            ?>
                            </select>
                         
                            
                        </td>
                    </tr>
                    <tr>
                        <td>blog image </td>
                        <td><input type="file" name="bimage" value="" />
                            
                        </td>
                    </tr>
                    <tr>
                        <td>Paragraph
                        </td>
                        <td>
                            <textarea name="para"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Submit Post" name="addp" />
                        </td>
                        <td>
                            <input type="reset" value="Cancel Post" />
                        </td>
                    </tr>
                </tbody>
            </table>

            
            
            
            
        </form>
        
  
    </body>
</html>
<?php 
if (isset($_POST['addp'])){
    global $connect;
    $titles= $_POST['title'];
    $admin = $_POST['admin'];
    $para = $_POST['para'];
    $blog_image = $_FILES['bimage']['name'];
    $blog_image_tmp = $_FILES['bimage']['tmp_name'];
    move_uploaded_file($blog_image_tmp,"images/$blog_image" );
    
    $addblog = "insert into blog (title,admin,image,para) values ('$titles','$admin','$blog_image','$para')";
  $run_blog = mysqli_query($connect, $addblog); 
  if ($run_blog){
      echo "<script>alert('post is inserted')</script>";
  }
    
    
    
    
}


?>