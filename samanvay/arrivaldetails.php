<?php
session_start();
if(isset($_POST['submit'])){
require_once "connection.php" ;
$time = "" ;
$name = $_POST['name'] ;
$countryCode = $_POST['countrycode'] ;
$mobile = $_POST['mobile'] ;
$dateofArrival = $_POST['date'];
$timeofArrival = $_POST['time'] ;
$mode = $_POST['mode'] ;
$stationofArrival = $_POST['station'] ;
$accomodation = $_POST['accomodation'] ;
$chooseAccomodation = $_POST['chooseAccomodation'] ;



if($timeofArrival=="4to5am")
	$time = "4AM to 5 AM" ;

else if($timeofArrival=="5to6am")
	$time = "5 to 6 AM" ;

else if($timeofArrival=="6to7am")
	$time = "6 to 7 AM" ;
else if($timeofArrival=="7to8am")
	$time = "7 to 8 AM" ;
else if($timeofArrival=="8to9am")
	$time = "8 to 9 AM" ;
else if($timeofArrival=="9to10am")
	$time = "9 to 10 AM" ;
else if($timeofArrival=="10to11am")
	$time = "10 to 11 AM" ;
else if($timeofArrival=="11to12pm")
	$time = "11 to 12 PM" ;
else if($timeofArrival=="12to1pm")
	$time = "12 to 1 PM" ;
else if($timeofArrival=="1to2pm")
	$time = "1 to 2 PM" ;
else if($timeofArrival=="2to3pm")
	$time = "2 to 3 PM" ;
else if($timeofArrival=="3to4pm")
	$time = "3 to 4 PM" ;
else if($timeofArrival=="4to5pm")
	$time = "4 to 5 PM" ;
else if($timeofArrival=="5to6pm")
	$time = "5 to 6 PM" ;
else if($timeofArrival=="6to7pm")
	$time = "6 to 7 PM" ;
else if($timeofArrival=="7to8pm")
	$time = "7 to 8 PM" ;
else if($timeofArrival=="8to9pm")
	$time = "8 to 9 PM" ;
else if($timeofArrival=="9to10pm")
	$time = "9 to 10 PM" ;
else if($timeofArrival=="10to11pm")
	$time = "10 to 11 PM" ;
else if($timeofArrival=="11to12am")
	$time = "11 to 12 AM" ;
else if($timeofArrival=="12to1am")
	$time = "12 to 1 AM" ;
else if($timeofArrival=="1to2am")
	$time = "1 to 2 AM" ;
else if($timeofArrival=="2to3am")
	$time = "2 to 3 AM" ;
else if($timeofArrival=="3to4am")
	$time = "3 to 4 AM" ;



$query = "INSERT INTO arrival VALUES('$name', '$countryCode', '$mobile', '$dateofArrival', '$time', '$mode', '$stationofArrival', '$accomodation', '$chooseAccomodation')" ;

if( $result = $conn->query($query) ) 

{	
	//REMOVE THE COMMENT FROM THE LINE BELOW AND ADD URL FOR YOUR HELPLINE PAGE
	
	//header('Location:helpline.php') ;
	echo "Success";

}

else

{
	echo "failed" . $conn->error ;
}

}
else {
	$_SESSION['err']="Invalid Request";
	header("Location: confirm.html");
}
?>