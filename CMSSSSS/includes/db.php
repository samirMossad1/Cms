<?php 


$db['db_host'] = "localhost";
$db['db_user'] = 'root';
$db['db_password'] = 'crygenics';
$db['db_basename'] = 'newcms';


foreach( $db as $key => $value)
{
    
    
    define(strtoupper($key),$value);
}




$connection=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_BASENAME);






if($connection)
{
    
    echo "We are connected";
}










?>