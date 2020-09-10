<?php

header('location:hospitalform.php');


if(isset($_POST['submit'])){
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$srmid = $_POST['srmid'];
$mailid = $_POST['mailid'];
$phone = $_POST['phone'];

$problem = $_POST['problem'];
$vrecent = $_POST['vrecent'];
$condi_tion =  $_POST['condi_tion'];
$adate =  $_POST['adate'];
$vtime = $_POST['vtime'];
$contact =  $_POST['contact'];


$dbconnect = mysqli_connect('localhost', 'root', '77777', 'hospitalform');

$sql = mysqli_query($dbconnect, "insert into hospitaltable(firstname,lastname,srmid, mailid,phone,problem, vrecent, condi_tion, adate, vtime, contact) values('$firstname', '$lastname','$srmid', '$mailid', '$phone', '$problem',  '$vrecent', '$condi_tion', '$adate', '$vtime', '$contact')");


if($sql){
	echo "Data inserted";
}

else{
 echo "Failed to connect";

}



}



















?>
