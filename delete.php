<?php 
$hostname="localhost";
$username="root";
$password="";
$dbname="phpmydb";
$conn=new mysqli($hostname,$username,$password,$dbname);
if($conn->connect_error){
  echo $conn->connect_error;
}
$sql="DELETE FROM students WHERE id=7";
if($conn->query($sql)){
  echo 'Delete data ?';
}else{
  echo $conn->error;
}

$conn->close();
?>