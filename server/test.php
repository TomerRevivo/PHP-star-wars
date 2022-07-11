<?php

require_once 'C:\xampp\htdocs\StarWarsProject_PHP\server\StarWarsAPI.php'; 
//CREATE NEW OBJECT 
$rq = new StarWarsAPI() ;

print_r( $rq ->generate());  
echo "\n"; 

