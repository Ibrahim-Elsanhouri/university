<!DOCTYPE html>
<?php include './functions.php';?>
 <?php
 global $connect;
$getid= $_GET['idget'];
$getstd= "select * from std where id='$getid'";
$runstd= mysqli_query($connect, $getstd);
($row1 = mysqli_fetch_array($runstd)); 
    $n=$row1['name'];
     $ee=$row1['email'];
    
       $mo=$row1['mobile'];

       

?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Update a Student</title>
    </head>
    <body bgcolor="skyblue">
        <form method="POST" enctype="multipart/form-data">
            <table bgcolor="orange" border="2" width="1000" align="center">
                <thead>
                    <tr>
                        <th colspan="2">Update an existing Student</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Register Number </td>
                        <td>
                            <input type="text" name="id" value="<?php echo $getid; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>Student Name</td>
                        <td>
                            <input type="text" name="name" value="<?php echo $n; ?>" />
                            
                            
                        </td>
                    </tr>
                                        <tr>
                        <td>Mobile  </td>
                        <td>
                            <input type="text" name="mob" value="<?php echo $mo;?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>Email </td>
                        <td>
                            <input type="email" name="e" value="<?php echo $ee; ?>" />
                        </td>
                    </tr>
                 
             
                         <tr>
                             <td><input type="submit" name="u" value="Update  a Students" /> </td>
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
if (isset($_POST['u'])){
   
    $idkey = $getid;
    $e_name = $_POST['name'];
    $e_mob = $_POST['mob'];
    $e_email = $_POST['e'];
 
    $up_std = "update std set email='$e_email' , mobile='$e_mob' , name='$e_name'  where id='$idkey'";
    $run_upstd = mysqli_query($connect, $up_std);
    if ($run_upstd){
        echo "<script>alert('student has been updated ')</script>";
        echo "<script>window.open('allstd.php','_self')</script>";
    }else{
          echo "<script>alert('student has not been updated ')</script>";
    }
}
//$update products set product_cat='$product_cat',product_brand='$product_brand',product_title='$product_title',product_price='$product_price',product_desc='$product_desc',product_image='$product_image', product_keywords='$product_keywords' where product_id='$update_id'";
// $update_product = "update products set product_cat='$product_cat',product_brand='$product_brand',product_title='$product_title',product_price='$product_price',product_desc='$product_desc',product_image='$product_image', product_keywords='$product_keywords' where product_id='$update_id'";
		 
	//	 $run_product = mysqli_query($con, $update_product);
		 
	
?>