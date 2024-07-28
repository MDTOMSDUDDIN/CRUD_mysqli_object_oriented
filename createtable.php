<?php
$hostname="localhost";
$username="root";
$pasword="";
$dbname="phpmydb";


$conn=new mysqli($hostname,$username,$pasword,$dbname);

if($conn->connect_error){
    echo $conn->connect_error;
}

 $sql="CREATE TABLE students(
 id INT(6) AUTO_INCREMENT PRIMARY KEY,
 firstname VARCHAR (30),
 lastname  VARCHAR (29),
 email     VARCHAR (50)
 )"; 

 if($conn->query($sql) ===TRUE){
    echo "table created ";
 }else{
    echo $conn->error;
 }
$conn->close();
?>