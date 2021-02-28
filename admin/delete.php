<?php


session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
$did=intval($_GET['pid']);	
if($did)
{

    $result = $dbh->prepare("DELETE FROM TblTourPackages WHERE PackageId= :memid");
    $result->bindParam(':memid', $did);
    $result->execute();
    
    $msg="Package Updated Successfully";
    echo $msg;
    header("location: manage-packages.php");
}

}
?>