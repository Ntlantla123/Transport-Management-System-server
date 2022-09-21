<?php

if(isset($_POST['signup'])){

  $username=$_POST['username'];
  $address=$_POST['address'];

  $password=$_POST['password'];
  $email=$_POST['email'];
  $user_num=$_POST['user_num'];
//user register table in database
  $query="select*form userregister where username='$username' ";
  $run=mysql_query($con,$query);
  if(mysqli_num_rows($run)>0){
    $rowfetch=mysqli_fetch_assoc($run);
    if($username==isset(rowfetch['username'])){
      echo"username already exist so select another username";
    }

  }
  else{
    $query="insert into userregister(id,username,password,email,contact)values('NULL','$username','$address','$password',
    '$email','$user_num') ";
  $run=mysql_query($con,$query);
  echo " your registration has been submitted successfully";

  }
 
  
}

?>