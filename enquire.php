<?php
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit1']))
{
$name=$_POST['name'];
$email=$_POST['email'];	
$phone=$_POST['phone'];
$nationality=$_POST['nationality'];	
$interest=$_POST['interest'];	
$budget=$_POST['budget'];	
$message=$_POST['message'];
$sql="INSERT INTO  tblenquiry(FullName,EmailId,MobileNumber,nationality,interests,budget,messages) 
VALUES(:FullName,:EmailId,:MobileNumber,:nationality,:interests,:budget,:messages)";
$query = $dbh->prepare($sql);
$query->bindParam(':FullName',$name,PDO::PARAM_STR);
$query->bindParam(':EmailId',$email,PDO::PARAM_STR);
$query->bindParam(':MobileNumber',$phone,PDO::PARAM_STR);
$query->bindParam(':nationality',$nationality,PDO::PARAM_STR);
$query->bindParam(':interests',$interest,PDO::PARAM_STR);
$query->bindParam(':budget',$budget,PDO::PARAM_STR);
$query->bindParam(':messages',$message,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Enquiry  Successfully submited";
echo "<script type='text/javascript'> document.location = 'thankyou.php'; </script>";
}
else 
{
$error="Something went wrong. Please try again";
echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
}

}

?>