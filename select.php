<?php 
$hostname="localhost";
$username="root";
$password="";
$dbname="phpmydb";
$conn=new mysqli($hostname,$username,$password,$dbname);
if($conn->connect_error){
   echo $conn->connect_error;
}

$sql="SELECT id,firstname,email FROM students 
ORDER BY firstname aSC  LIMIT 2 ,2";

$result=$conn->query($sql);

if($result->num_rows){
    while($row=$result->fetch_assoc()){
        echo $row['id'].'| '.$row['firstname'].' | '.$row['email'].'<br>';
    }
}else{
echo $conn->error;
}
$conn->close();
?>