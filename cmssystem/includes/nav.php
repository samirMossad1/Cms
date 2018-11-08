 <?php //hena 3amlat include lel function.php 3sh hast5dmha ta7t?>
  
  <?php include"functions.php"?>
  
   
    
      <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  
                  
            <?php
                    
//3ayz a3mel el nav bar dynamic we yetala3 el 7agat ely mawgooda fel db
    
// awel 7aga hab3at query eny a3mel select lel cols ely gwa el table we 7atet pointer leeh gow result
    
// ha3mel fetch fe shakl assoc arr ely hwa el row we kol mara hatba3 ely gowa el cat_title
    
// bs ha3mel el kalam da be echo 3shan 3ayz yero7 lel browser ba3d ma el server ye5alas     
    

 $result=send_query("SELECT * FROM category");

while($row=mysqli_fetch_assoc($result))
{
    $cat_title=$row['cat_title'];
    
    echo"<li>";
     echo"<a href='#'>$cat_title</a>";
     echo"</li>";
    
    
}
              
?>              
                       
                                          
        
         
                </ul>
            </div>
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>