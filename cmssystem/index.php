
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

     
<!-- 
 hena ba2a 3ayz a3mel el posts beta3ty dynamic
 awel 7aga ro7t 3amalt table el posts bel cols ely me7atgha
 we ba3den geet hena ba2a awel 7aga ba3at el query
 we ba3d keda 5adt el data ely hateegy fe kol mara fe assoc array 
 ely hwa esmo row we 5aznt el data kolaha fe variables
 
 we fe nos el loop deh ha3mel code el html bs el7agat ely betet3ered ha3melha bel echo 3sh fe kol lafa tetla3 ely fel database
 
 
 
 fe goz2 el image ba2a 3sh a7ot image dynamically , mesh h2dar a5azenhom fel database , laken ha5azen el refrence beta3hom fel db
 we ge goz2 el src ha7ot el kalam da fe echo maben php tags
 
 
 
 -->                                     
                         
                                             
   <?php
                
        $result=send_query("SELECT * FROM posts"); 
        
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
                <img class="img-responsive" src="images/<?php echo $post_image ;?>" alt="">
                <hr>
                <p><?php echo $post_content; ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                <hr>    
            
      
<?php }?>                
            
                 
                  
                   
                
                
                
                
                
                
                
                
                

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

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
