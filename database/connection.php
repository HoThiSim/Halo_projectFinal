<?php
$server='localhost';
$user='root';
$password='';

$connection = new mysqli($server,$user,$password,'halo');

if(mysqli_connect_errno()){
    echo mysqli_connect_errno();
}




?>