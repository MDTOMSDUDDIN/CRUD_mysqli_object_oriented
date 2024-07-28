<?php 
$hostname="localhost";
$username="root";
$password="";
$dbname="phpmydb";
$conn=new mysqli($hostname,$username,$password,$dbname);
if($conn->connect_error){
   echo $conn->connect_error;
}


$sql="UPDATE students SET firstname='TOMAS' , lastname='UDDIN', email='tomasuddinn@gmail.com' WHERE ID=2 ";

if($conn->query($sql)==TRUE){
    echo 'update';
}
else{
    echo $conn->error;
}

$conn->close();
?>