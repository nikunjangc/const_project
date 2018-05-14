
<html>
<?php 
    $proj_name=
$mysquli= NEW MySQLi('localhost','root','','login');



       
        $query= $mysquli->query("SELECT id FROM cost_info WHERE Proj_ID='$user' AND password='$password'");

        if($query->num_rows ==0){
            echo"invalid username /password";
        }else{
            $_SESSION['loggedin']= true;
            $_SESSION['username']=$username;
          //  echo "welcome "  .$_SESSION['username'];
         header("Location: index.html"); 
    }
   
}
}


