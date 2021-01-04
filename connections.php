
<?php 

$dbhost  = "localhost" ;
$dbuser  = "root" ;
$dbpass  = "" ;
$dbname  = "pet_corner" ;

if(!$con = mysqli_connect($dbhost , $dbuser, $dbpass , $dbname  ))
{
		die("Connection failed") ; 
}

