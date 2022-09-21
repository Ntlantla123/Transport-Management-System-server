<?php
include('dbconnection.php');
session_start();
 if(!isset($_SESSION['username']))
 {
    header('location:userLogin.php');
    if(isset($_SESSION['username'])){
$username=$_SESSION['username'];
    }
 }

 //user booking seats page
 $id=$_GET['id']??"";
 $seats=$_GET['seats']??"";
 $vehicle=$_GET['vehicle']??"";
 $end_pnt=$_GET['end_pnt']??"";
 $str_pnt=$_GET['str_pnt']??"";
 $fee=$_GET['fee']??"";
 $query="select *from userregister where username='$username'";
 $run1=mysqli_query($con,$query);
 $rowFetch=mysqli_fetch_assoc($run1);
 $userid=$rowFetch['id'];

 

?>

<?php
if(isset($_POST['seatsBook'])){
  //when users click on confirm Button get Data from fields and save as variables
  $id =$_POST['id'];
   $userid =$_POST['userid'];
    $requestSeats =$_POST['requestSeats'];
     $username =$_POST['username'];
      $str_pnt =$_POST['str_pnt'];
       $end_pnt =$_POST['end_pnt'];
        $vehical =$_POST['vehical'];
        $query="insert into request_seats(
            id,userid,username,vehical,seats,Status,str_pnt,end_pnt)
            values('$id','$userid','$username','$vehical','$requestSeats
            ','pending','$str_pnt','$end_pnt',)";
 $run=mysqli_query($con,$query);
echo "your request for seats Booking has been submitted successfully. Wait for approval "; 

}

?>