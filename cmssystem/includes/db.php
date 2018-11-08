<?php

// we made this file for all our database includes



//first we need to connet to out database

//3shan el security hane3mel el kalam el gy da

$db_array=array(

"db_host"=>'localhost',
"db_user"=>'root',
"db_pass"=>'crygenics',
"db_name"=>'cms'    

);

// hena hane3mel el values bet3tna fe shakl constants

foreach($db_array as $key => $value)
{
    // hena ha3mel el key upper case we ha3melo define
    // bel value  ya3ny el upper case key ka constant name
    // ba2a hwa hwa ely mawgood fel value beta3t el lower key beta3t el array el asly
    
    define(strtoupper($key),$value);
    
}



// hane3mel connect lel db 3an taree2 el function deh
$connection=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

//hane3mel check lel db fat7t walla feeh erro
if(!$connection) echo "You are not connected to Cms Database";

















?>