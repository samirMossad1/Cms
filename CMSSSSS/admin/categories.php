<?php include "../includes/functions.php";?>




<?php

if(isset($_POST['submit']))
{

    $cat_title=$_POST['category'];
    
    if($_POST['submit']=="Add")
    add_category("$cat_title");
    
    elseif ($_POST['submit']=="Delete")
    delete_category("$cat_title") ;  
    
    elseif ($_POST['submit']=="Delete All")
    delete_category_All() ;
    
}


?>
      

      
<?php  include "includes/header.php";  ?>
       
        <!-- Navigation -->
        
            
<?php  include "includes/nav.php";  ?>

       

<?php  include "includes/footer.php";  ?>



<div class="col-xs-6">
       <form  action="categories.php" method="post" >
           
           <div class="form-group">
            <label for="category">Category Title</label> 
                 
               <input name="category" type="text" class="form-control">
               <br>
               <input type="submit" class="btn btn-primary" name="submit"
               value="Add"
               >
               <input type="submit" class="btn btn-primary" name="submit"
               value="Delete"
               >
               <input type="submit" class="btn btn-primary" name="submit"
               value="Delete All"
               >
               </div>
               
           
       </form>
   </div>
   
   
   <div class="col-xs-6">
       
       <table class="table table-bordered table-hover">
           <thead>
               <tr>
                   
                   <th>Id</th>
                   <th>Category Title</th>
                   
                   
               </tr>  
           </thead>
           <tbody>
               <?php display_categories_inTable(); ?>
           </tbody>
           
       </table>
       
       
       
   </div>
   
            </div>
            <!-- /.container-fluid -->

           
   
        </div>
        <!-- /#page-wrapper -->

  
   
   
   
   
    </div>

