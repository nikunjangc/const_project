
<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password'])){
  header("Location: index.php"); 
} ?>
<!DOCTYPE html>
<html>

<link rel="stylesheet" href="login.css">
<head>

    <title>
        Login
    </title>
</head>

<body>
<?php  //echo(md5('Roshan1234'))?>
    
        <div class="headcontainer">
            <img src="lagcclogo.png" alt="lagcc" class="lagcclogo">
            <img src="officename.png" alt="vp office" class="officename">
        </div>
        <br>
        <hr width="700">
        <hr width="700">
        <br>
        <div class="container">
        <form action="login_db.php" method="POST">
            <label for="uname">Username:</label>
            <input class="textclass" type="text" name="username"><br>
            <label for="psw">Password:</label>&nbsp;
            <input class="textclass" type="password" name="password" ><br>
            <button type="submit" name="submit" class="btnlogin"> Login </button>
            </form>
        </div>
        <hr width=" 700 ">
    
</body>

</html>
