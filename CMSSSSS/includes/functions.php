<?php include "db.php"; ?>



<?php



function send_query($query)
{
   global $connection;
    
  $result=mysqli_query($connection,$query);
    
if(!$result) 
    die("QUERY FAILED " . mysqli_error($connections));
    
    return $result;

}




function display_Categories()
{
    
              
                $result=send_query("SELECT * FROM category");    
                while($row=mysqli_fetch_assoc($result))
                {
                    $cat_title=$row['cat_title'];
                    
                  
                    echo "<li>";
                    echo "<a href='#'>{$cat_title}</a>";
                    echo "</li>";
                }
    
    
}


function display_All_posts()
{
   
       
    
 $result=send_query("SELECT * FROM posts");
            
while($row=mysqli_fetch_assoc($result))
{
    
    $post_id=$row['post_id'];
    $post_category_id=$row['post_category_id'];
    $post_title=$row['post_title'];
    $post_author=$row['post_author'];
    $post_date=$row['post_date'];
    $post_content=$row['post_content'];
    $post_image=$row['post_image'];
    $post_tags=$row['post_tags'];
    
      ?>      
                
              <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                 First Blog Post 
                <h2>
                    <a href="#"><?php echo $post_title; ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date; ?> PM</p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_image ?>" alt="IT">
                <hr>
                <p><?php echo $post_content; ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>


    
    
<?php } 
               
               
}

function display_Like($like)
{
   
 
    $query= "SELECT * FROM posts WHERE post_tags LIKE '%$like%' ";
    
 $result=send_query($query);
     
 $count=mysqli_num_rows($result);    
 if($count==0) echo "<h1>No Result</h1>";    
    
else {    
while($row=mysqli_fetch_assoc($result))
{
    
    $post_id=$row['post_id'];
    $post_category_id=$row['post_category_id'];
    $post_title=$row['post_title'];
    $post_author=$row['post_author'];
    $post_date=$row['post_date'];
    $post_content=$row['post_content'];
    $post_image=$row['post_image'];
    $post_tags=$row['post_tags'];
    
      ?>      
                
              <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                 First Blog Post 
                <h2>
                    <a href="#"><?php echo $post_title; ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date; ?> PM</p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_image ?>" alt="IT">
                <hr>
                <p><?php echo $post_content; ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>


    
    
<?php } 
               
               
}

}


function add_category($name)
{
    
 if(!empty($name)) 
 {
   $que="INSERT INTO `category`(`cat_title`) VALUES ('$name')";
   $result=send_query($que);
 }
    
    
}


function display_categories_inTable()

{
    
    $result=send_query("SELECT * FROM category");    
        while($row=mysqli_fetch_assoc($result))
                {
                    $cat_title=$row['cat_title'];
                    $cat_id=$row['cat_id'];
                  
             ?>
              
                <tr>
                   
                   <td><?php echo $cat_id ;?></td>
                   <td><?php echo $cat_title ;?></td>
                   
                   
               </tr>  
                  
            <?php
                }
    
}


function delete_category($name)
{
    
    $que="DELETE FROM `category` WHERE cat_title= '$name' ";
    $result=send_query($que);
    
    
}
    
function delete_category_All()
{
    
    
    $que="DELETE FROM `category` WHERE 1 ";
    $result=send_query($que);
    
    
}


?>