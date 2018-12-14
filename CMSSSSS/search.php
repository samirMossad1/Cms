  <?php include "includes/functions.php" ?>


<?php include "includes/header.php" ?>


    <!-- Navigation -->
    

<?php include "includes/nav.php" ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

               
               
               
               
                    <?php
                
      if(isset($_POST['submit']))
      {
            $cat=$_POST['search'];
            
            
            display_like($cat);
      
        }
      
                
                ?>
              
               
               
               
               

            </div>

            <!-- Blog Sidebar Widgets Column -->
           
           <?php include "includes/side.php"; ?>
             
            <!-- /.row -->

        <hr>

        <!-- Footer -->
              <?php include "includes/footer.php"; ?>