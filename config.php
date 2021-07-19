<?php
// $insert=false;
// if(isset($_POST['name'])){
    
    $server="localhost:3307";
	$db_host ="localhost:8080";
    $username="root";
    $password="";
    $db="sparks_bank";
    $con=mysqli_connect($server, $username, $password,$db);
    if(!$con){
        die("Connetion to this database failed due to " .mysqli_connect_error());
    }
    // echo "Success connecting to the db";
// }
?>