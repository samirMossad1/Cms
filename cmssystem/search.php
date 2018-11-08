<!--
hena 3amalt saf7a tanya 3shan el search yero7lha laken el saf7a heya heya el index page bezabt bs hayob2a feeha logic eny atala3 el articls el et3amal 3aleeha search bs
-->






<!DOCTYPE html>
<html lang="en">

<!--Head-->
 <?php include "includes/head.php" ?>
 
 
 
 
 
<body>

   <?php include "includes/nav.php" ?>

   
   
   
   
   
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

      
          <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

        
                                             
   <?php
    
    
/*
hena ana fel search buttom 3amalto submit we ba3at el 7aga fe superglobal POST ha3mel check 3ala submit isset wala la2

ba3den ha5od ely gowa el search da men el text name fel form , we hab3at beeh el query ely ta7t deh we ba3den ha3mel while we atba3 el kalam da

*/    
  

 if(isset($_POST['submit']))
{
    $post_tag=$_POST['search']; 
     
    $result=send_query("SELECT * FROM posts WHERE post_tags LIKE '$post_tag'") ;
    
    check_query_sent($result);
    
     

// mohema el function deh 3sh akon 3aref en law mafeesh matches fe 3adad el rows be zero atba3 no matches found     
$count=mysqli_num_rows($result);     
     
     
     if($count!=0){
     while($row=mysqli_fetch_assoc($result))
        {
            $post_title=$row['post_title'];
            $post_author=$row['post_author'];
            $post_date=$row['post_date'];
            $post_content=$row['post_content'];
            $post_image=$row['post_image'];
?> 
          
                     <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $post_title; ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date; ?></p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_image;?>" alt="">
                <hr>
                <p><?php echo $post_content; ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                   
            
      
<?php }}
     else { echo " No Matches Found for your search $post_tag <hr>"; }
               
}
else


?>
              
                  
            </div>

           
           
           
           
            
            <!-- Blog Sidebar Widgets Column -->
         
             <?php include"includes/sidebar.php" ?>
        
         
          
            
         </div>
        <!-- /.row -->

        <hr>

      
       
       
       
        <!-- Footer -->
       <?php include "includes/footer.php" ?>

  
  
    
   
        </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
