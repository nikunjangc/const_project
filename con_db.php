<?php 
$servername="localhost";
$username="root";
$password="";
$conn= new mysql($servername,$username,$password);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
    
}
echo "connected succcessfully";
?>