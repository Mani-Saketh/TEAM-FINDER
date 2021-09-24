<?php
$host="localhost:3307";
$user="root";
$password="";
$dbname="team";
$con=mysqli_connect($host,$user,$password,$dbname);
if(!$con){
    echo'connection failed';
}


?>