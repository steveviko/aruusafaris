<?php
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submitbook']))
{
$name=$_POST['name'];
$email=$_POST['email'];	
$phone=$_POST['phone'];
$fromdate=$_POST['fromdate'];	
$todate=$_POST['todate'];
$carname=$_POST['carname'];	
$carid=$_POST['carid'];	
$message=$_POST['message'];
$sql="INSERT INTO  car_booking(name,email,phone,fromdate,todate,carname,carid,message) 
VALUES(:name,:email,:phone,:fromdate,:todate,:carname,:carid,:message)";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':phone',$phone,PDO::PARAM_STR);
$query->bindParam(':fromdate',$fromdate,PDO::PARAM_STR);
$query->bindParam(':todate',$todate,PDO::PARAM_STR);
$query->bindParam(':carname',$carname,PDO::PARAM_STR);
$query->bindParam(':carid',$carid,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Your car reservation was  Successfully submited";
echo "<script type='text/javascript'> document.location = 'thankyou.php'; </script>";
}
else 
{
$error="Something went wrong. Please try again";
echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
}

}

?>