<?php

//hena ha3mel kol el functions beta3ty

//lazem 3shan ab3at ay queries a3mel connect ma3 el database el awel 3shan keda ha3mel include hena 
// we lama a3mel include lel file da fel main haykon ma3mool included ma3ah el db connection kda kda



include "db.php" ;
    
    
    
    
    //ha3mel hena function beta5od query we terag3ly el pointer ely hwa el result 3allatool
    // 5aly balak el send fucntion deh hatenfa3 le ay table gowa el database la2ny kda kda ba7ded esm el table we ana ba3mel select query
    
function send_query($que)
{
    global $connection;
    $query=$que;
    
    $result=mysqli_query($connection,$query);
    return $result;
    
}



function check_query_sent($result)
{
    if(!$result)
    {echo"asdads";}
    
    
    
}



































?>