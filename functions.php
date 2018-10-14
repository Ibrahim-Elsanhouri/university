<?php 
$connect= mysqli_connect("localhost","root","12jksb6010","students") or die('cannot connect to database');

    function get_post(){
        global $connect;
        $getpost="select * from blog order by RAND() LIMIT 0,3";
        $run_getpost= mysqli_query($connect,$getpost);
        while ($row_getpost = mysqli_fetch_array($run_getpost)) {
            $title = $row_getpost['title'];
            $admin = $row_getpost['admin'];
            $date = $row_getpost['date'];
            $image = $row_getpost['image'];
            $paragraf = $row_getpost['para'];
            $blogid= $row_getpost['blogid'];
            
            echo "	<div class='blog-info'>
					<h3><a href='single.html'>$title</a></h3>
					<p>Posted By <a>$admin</a> &nbsp;&nbsp; on $date &nbsp;&nbsp; <a >Comments (10)</a></p>
					<div class='blog-info-text'>
						<div class='blog-img'>
							<a href='single.html'> <img width='360' height='360' src='images/$image'/></a>
						</div>
						<p class='snglp'>$paragraf</p>
						<a href='details.php?id=$blogid' class='btn btn-primary hvr-rectangle-in'>Read More</a>
					</div>	
				</div>";
        }
    }
    function get_blog_details(){
        global $connect;
        if (isset($_GET['id'])){
            $blogid = $_GET['id'];
            $get_blog_details = "select * from blog where blogid='$blogid'";
            $run_details = mysqli_query($connect, $get_blog_details);
            while ($row_details = mysqli_fetch_array($run_details)) {
                   $titless = $row_details['title'];
            $admins = $row_details['admin'];
            $dates = $row_details['date'];
            $imagesss= $row_details['image'];
            $paragrafs = $row_details['para'];
            $blogids= $row_details['blogid'];
            echo "
                        <div class='blog-info-text'>
                            <div class='blog-img'>
                                <img src='images/$imagesss'/>
                            </div>
                            <h4>$titles</h4>
                            <p class='snglp'>$paragrafs</p>

                        </div>
                        <div class='comment-icons'>
                            <ul>
                               
                                <li><span class='clndr'></span>$dates</li>
                                <li><span class='admin'></span> <a>$admins</a></li>
                                <li><span class='cmnts'></span> <a>5 comments</a></li>
                               
                            </ul>
                        </div>";
            
            }
        }
    }
 
 function show_comments(){
     if (isset($_GET['id']))
     global $connect;
     $lastid=$_GET['id'];
     $get_comment="select * from comment where blogid='$lastid'"; 
     $run_get_comment = mysqli_query($connect, $get_comment);
   //  $counts = mysqli_num_rows($run_get_comment);
     while ($row_comment = mysqli_fetch_array($run_get_comment)) {
         $comments = $row_comment['comments'];
         echo "    <div class='media response-info'>
                             
                                <div class='media-body response-text-right'>
                                    <p>$comments</p>
                                    
                                       
                                     
                          
                                </div>
                                <div class='clearfix'> </div>
                            </div>";
     }
 }
 function get_comment_num(){
     global $connect;
      if (isset($_GET['id'])){
          $lastids=$_GET['id'];
           $get_comments="select * from comment where blogid='$lastids'"; 
     $run_get_comments = mysqli_query($connect, $get_comments);
    $counts = mysqli_num_rows($run_get_comments);
    echo $counts;
      }
 }
 
 
 
 function total_subject(){
 
	if(isset($_GET['reg_no'])){
	
		global $connect; 
		
		$ip=$_GET['reg_no'];
		
		$get_subjects = "select * from result where ID='$ip'";
		
		$run_subjects = mysqli_query($connect, $get_subjects); 
		
		$count_subjects = mysqli_num_rows($run_subjects);
		
		}
		
		else {
		
		global $connect; 
		
		$ip = $_GET['reg_no']; 
		
		$get_subjects = "select * from result where ID='$ip'";
		
		$run_subjects = mysqli_query($connect, $get_subjects); 
		
		$count_subjects = mysqli_num_rows($run_subjects);
		
		
		}
	
                return $count_subjects;
	}
  
// Getting the total price of the items in the cart 
	
	function total_mark(){
	if (isset($_GET['reg_no']))
		$totals = 0;
		
		global $connect; 
		
		$ip = $_GET['reg_no']; 
		
		$get_mark = "select * from result where ID='$ip'";
		
		$run_mark = mysqli_query($connect, $get_mark); 
		
		while($m_mark=mysqli_fetch_array($run_mark)){
			
			$subject_total = array($m_mark['sub_mark']);
			
			$values = array_sum($subject_total);
			
			$totals +=$values;
			
			}
		return $totals;
		
		}
		

		
	
	
//getting the categories
 
 
 // getting a result 
                function get_result(){
                    if (isset($_GET['get_res'])){
                        global $connect;
                        $get_res_reg = $_GET['reg_res'];
                        $get_sub_res = "select * from result where ID='$get_res_reg'";
                        $run_get_res = mysqli_query($connect, $get_sub_res);
                        while ($row_show = mysqli_fetch_array($run_get_res)) {
                            $subject_title = $row_show['sub_title'];
                            $subject_mark = $row_show['sub_mark'];
                            echo "<tr><td><h1 id='h1.-bootstrap-heading'>$subject_title<a class='anchorjs-link' href='#h1.-bootstrap-heading'><span class='anchorjs-icon'></span></a></h1></td>
				  <td class='type-info'>$subject_mark</td>
							</tr>";
                        }
                    }
                }
                function get_details(){
                    
                    if (isset($_GET['get_res'])){
                        global $connect;
                        $get_res_reg = $_GET['reg_res'];
                        $get_res_details = "select * from grade where ID='$get_res_reg'";
                        $runit= mysqli_query($connect, $get_res_details);
                        while ($row_runit = mysqli_fetch_array($runit)) {
                            $total = $row_runit['total'];
                            $grade =$row_runit['grade'];
                            echo " <div class='alert alert-success' role='alert'>
					<strong>Total Marks </strong>$total</div>
			   <div class='alert alert-info' role='alert'>
					<strong>Grade</strong>$grade </div>";
                        }
                }
 
                }
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 