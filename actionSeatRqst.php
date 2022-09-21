<?php
include('dbconnection.php');

session_start();
if(!isset($_SESSION['username']))
{
    header('location:adminlogin.php');

}
//admin taking action from his side
$id=$_GET['id'];
$vehical=$_GET['vehical'];
$str_pnt=$_GET['str_pnt'];
$username=$_GET['username'];
$end_pnt=$_GET['end_pnt'];
$seats=$_GET['seats'];

?>

<?php
//accept new requests
if(isset($_POST['accept'])){
    $queUpdate="update 'requests_seats' set Status='accepted'
     where status='pending' and id='$id' and username='$username'";
 $run = $mysqli_query($con,$queUpdate);
 echo"status updated as accepted";
 header('location:viewSeatsRqst.php');
     
}
else if(isset($_POST['reject'])){
    $que="select*from request_seats where id='$id' and Status='$pending'";
   $run = $mysqli_query($con,$que);
echo"status updated as accepted";
header('location:viewSeatsRqst.php');
}
?>