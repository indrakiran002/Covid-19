<?php

header('location:roomform.php');

if(isset($_POST['submit'])){
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$srmid =  $_POST['srmid'];
$mailid = $_POST['mailid'];
$phone = $_POST['phone'];
$towerno = $_POST['towerno'];
$roomno = $_POST['roomno'];
$service = $_POST['service'];
$time = $_POST['time'];
$suggestions = $_POST['suggestions'];


$dbconnect = mysqli_connect('localhost', 'root', '77777', 'roomservice');

$sql = mysqli_query($dbconnect, "insert into roomservtable(firstname,lastname,srmid,mailid,phone,towerno,roomno,service, time, suggestions) values('$firstname', '$lastname', '$srmid', '$mailid', '$phone', '$towerno', '$roomno', '$service', '$time', '$suggestions')");


if($sql){
	echo "Data inserted";
}

else{
 echo "Failed to connect";

}



}



















?>
