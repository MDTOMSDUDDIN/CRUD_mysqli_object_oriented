<?php
$hostname="localhost";
$username="root";
$pasword="";
$dbname="phpmydb";


$conn=new mysqli($hostname,$username,$pasword,$dbname);

if($conn->connect_error){
    echo $conn->connect_error;
}
$sql="INSERT INTO students(firstname, lastname, email) VALUES('Tomas' , 'uddin' , 'mdtomasuddin@gmail.com')";

if($conn->query($sql)==TRUE){
    echo "insert OK";
}
else{
    echo $conn->error;
}
?>