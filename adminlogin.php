<?php

if(isset($_POST['submitBtn'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="select * admin where username='username' and password='password' ";
    $run=mysqli_query($con,$query);
    $totalrows=mysqli_num_rows($run);
    if( $totalrows==1){
        $_SESSION['username']=$username;
        header('location:adminHome.php');

    }
else{
    echo" incorrect username or password";
}
}


?>