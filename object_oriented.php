<?php
$hostname="localhost";
$username="root";
$pasword="";


$conn=new mysqli($hostname,$username,$pasword);

if($conn->connect_error){
    echo $conn->connect_error;
}
$sql="CREATE DATABASE phpmydb";

if($conn->query($sql) == TRUE){
        echo "DB CREATED ";
}else{
    echo $conn->error;
}
$conn->close()
?>