
<html>
<?php
session_start();
$output= NULL;
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    if(empty($username) || empty($password)){
        echo "enter all fields";
    }else{
        $mysquli= NEW MySQLi('localhost','root','','db_project_construction');
        $username= $mysquli->real_escape_string($username);
        $password= $mysquli->real_escape_string($password);
        $query= $mysquli->query("call authUser ('$username','$password')");
        if($query->num_rows ==0){
            echo"invalid username or password";
        }else{
            $_SESSION['loggedin']= true;
            $_SESSION['username']=$username;
            $_SESSION['password']=$password;
         header("Location: index.php"); 
    }
   
}
}

