<?php

header('location:covid-19.php');

if(isset($_POST['submit'])){
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mailid = $_POST['mailid'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$place = $_POST['place'];
$arrival =  $_POST['arrival'];
$symptoms =  $_POST['symptoms'];
$sympdays = $_POST['sympdays'];
$fvisit =  $_POST['fvisit'];
$locatity =  $_POST['locatity'];
$suggestions = $_POST['suggestions'];


$dbconnect = mysqli_connect('localhost', 'root', '77777', 'covidform');

$sql = mysqli_query($dbconnect, "insert into covidtable(firstname,lastname,mailid,phone,age, gender, place, arrival, symptoms, sympdays, fvisit, locatity, suggestions) values('$firstname', '$lastname', '$mailid', '$phone', '$age', '$gender',  '$place', '$arrival', '$symptoms', '$sympdays', '$fvisit', '$locatity', '$suggestions')");


if($sql){
	echo "Data Inserted";	

}

else{
 echo "Failed to connect";

}



}







?>
