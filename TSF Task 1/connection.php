<?php 

$server="localhost";
$username="root";
$password="";
$db="masters_bank_db";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
}

else
    die("connection to this database failed due to " .mysqli_connect_error()); //connection not establised
    
?>