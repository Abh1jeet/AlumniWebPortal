<?php
$message = "" ;

require_once "details.php" ;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['flag']))  {
$time = "" ;
$name = mysqli_real_escape_string($conn, $_POST['name']) ;
$countryCode = mysqli_real_escape_string($conn, $_POST['countrycode']) ;
$mobile = mysqli_real_escape_string($conn, $_POST['mobile']) ;
$dateofArrival = $_POST['date'];
$timeofArrival = $_POST['time'] ;
$mode = $_POST['mode'];
$stationofArrival = $_POST['station'];
$accomodation = $_POST['accomodation'];
$chooseAccomodation = $_POST['chooseAccomodation'];



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


if(!$conn)  
  echo "error" ;
$query = "INSERT INTO arrival VALUES('$name', '$countryCode', '$mobile', '$dateofArrival', '$time', '$mode', '$stationofArrival', '$accomodation', '$chooseAccomodation')" ;

if( $result = $conn->query($query) ) 

{ 
  //REMOVE THE COMMENT FROM THE LINE BELOW AND ADD URL FOR YOUR HELPLINE PAGE
  
  //header('Location:helpline.php') ;
  $message = "Thank You! Your arrival details have been confirmed. We will be looking forward to welcome you!";

}

else

{
  $message =  "Sorry! We couldn't confirm your arrival. Please try again!" . $conn->error ;
}

}

  
?>
<!DOCTYPE HTML>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html lang="en" class="no-js"><!--<![endif]-->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0">
      <meta name="keywords" content="ptaa, gbpuat, alumni, alumni meet, samanvay, cot, college of technology, G.B. Pant University, confirm arrival">
      <title>SAMANVAY - Confirmation</title>
      <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="shortcut icon" href="samanvay_logo.ico" type="image/x-icon">
      <link href="../templates/_main-v2/_css/main.css" rel="stylesheet" type="text/css" media="all">
      <link href="../added_files/css/style.css" rel="stylesheet" type="text/css" media="all">
      <link href="../_css/custom-styles.css" rel="stylesheet" type="text/css" media="all">
      
      
      <!--[if lt IE 9]>
      <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <link href="//templates/_main-v2/respond-proxy.html" id="respond-proxy" rel="respond-proxy">
      
      <link href="http://templates/_images/respond.proxy.gif" id="respond-redirect" rel="respond-redirect">
      <script src="/_scripts/respond.proxy.js"></script>
      <![endif]-->
      
      <script src="../templates/_main-v2/_scripts/vendor/modernizr-2.6.2.min.js"></script>
      
      

</head>
   <body class="three-column-left nav-menu-wrap nav-tracking-off">
      <div class="uu-page-wrapper">
         <header class="uu-header" role="banner">
            <div class="uu-container"><a href="#uu-skip-target" class="uu-skip-nav">Skip to Main Content</a><div class="uu-header-logo"><a href="../index.html"><img src="../templates/_main-v2/_images/header/logo/uu-logo.png" alt="PTAA logo"></a>
</div>
               <nav class="uu-nav navbar navbar-inverse" role="navigation">
                  <h2 class="sr-only">Main Navigation</h2>
                  <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#top-nav"><span class="sr-only">Toggle navigation</span><span class="toggle-text">Menu</span><span class="icon-bar-group"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></span></button></div>
                  <div class="collapse navbar-collapse" id="top-nav"><ul class="nav navbar-nav navbar-right">
   <li>
      <a href="index.html">about</a>
   </li>
   <li>
      <a href="events.html">event details</a>
   </li>
   <li>
      <a href="confirm.php" title="confirm you arrival">confirmation</a>
   </li>
   <li>
      <a href="team.html">organising team</a>
   </li>
   <li>
      <a href="contact_us.html">contact us</a>
   </li>
</div>
               </nav>
            </div>
            <div class="uu-header-title">
               <div class="uu-container"><h1 style="color:white"><img src="../_images/samanvay logo.png" class="sam_logo" />SAMANVAY</h1>
            </div>
            </div>
         </header>
         <div class="uu-breadcrumb">
            <div class="uu-container">
               <p class="sr-only">You are here:</p>
               <ol class="breadcrumb">
                  <li><a href="../index.html">Home</a></li>
                  <li>Samanvay</li>
                  <li><a href="#" title="confirm your arrival">Confirmation</a></li>
               </ol>
            </div>
         </div>
         <main class="uu-main" role="main">
            <div class="uu-container">
               <div class="uu-main-top row" id="uu-skip-target">
                  <div class="uu-top-content">
                     <h1 style="color:inherit">Confirm your arrival</h1>
                  </div>
               </div>
               <div class="uu-main-bottom row">
                  <div class="uu-main-column" style="width: 100%">
                     <div class="uu-main-content">
                        <div class="panel">
                              <div class="container">

    <form class="well form-horizontal" action="<?php echo $_SERVER['PHP_SELF'] ;?>" method="POST"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>Enter Your Details!</legend>
<div id ="message" style="color: #C00;font-size: 1.2em">
<?php  echo $message; ?>

</div>
<!-- Text input-->
<h3 style = "text-align:center;">Personal Details</h3>


<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Name</label> 
  <div id = "fnameError"> </div>    
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="name" id="name" placeholder="Name" class="form-control"  type="text" required="required" >
    </div>
  </div>
</div>

<!-- Text input-->


<div class="form-group">
  <label class="col-md-4 control-label">Mobile Number </label>  
  <div id = "mobileError"> </div> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
<span>
  <input name="countrycode" id="countrycode" placeholder="Country Code (+91 - INDIA)" minlength="2" maxlength="4" class="form-control" type="text" required="required">    
 </span> 
<span>
  <input name="mobile" id="mobile" placeholder="Mobile Number" class="form-control" pattern="\d*" minlength="10" maxlength="10" required="required" >
</span>    
    </div>
  </div>
</div>

<!-- Needs Styling-->
<h3 style = "text-align:center;">Travel Details</h3>

    
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Date of arrival at Pantnagar</label> 
  <div id = "addressError"> </div> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="date" id="date" placeholder="Date of Arrival(dd-mm-yy)Ex. 20-12-2016 " class="form-control"  type="date" required="required">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Expected Time of Arrival</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <select name="time">
  <option value="4to5am">4 A.M. to 5 A.M. </option> 
  <option value="5to6am">5 A.M. to 6 A.M. </option> 
  <option value="6to7am" selected="selected">6 A.M. to 7 A.M. </option> 
  <option value="7to8am">7 A.M. to 8 A.M. </option> 
  <option value="8to9am">8 A.M. to 9 A.M. </option> 
  <option value="9to10am">9 A.M. to 10 A.M. </option> 
  <option value="10to11am">10 A.M. to 11 A.M. </option> 
  <option value="11to12am">11 A.M. to 12 P.M. </option> 
  <option value="12to1pm">12 P.M. to 1 P.M. </option> 
  <option value="1to2pm">1 P.M. to 2 P.M. </option> 
  <option value="2to3pm">2 P.M. to 3 P.M. </option> 
  <option value="3to4pm">3 P.M. to 4 P.M. </option> 
  <option value="4to5pm">4 P.M. to 5 P.M. </option> 
  <option value="5to6pm">5 P.M. to 6 P.M. </option> 
  <option value="6to7pm">6 P.M. to 7 P.M. </option> 
  <option value="7to8pm">7 P.M. to 8 P.M. </option> 
  <option value="8to9pm">8 P.M. to 9 P.M. </option> 
  <option value="9to10pm">9 P.M. to 10 P.M. </option> 
  <option value="10to11pm">10 P.M. to 11 P.M. </option> 
  <option value="11to12pm">11 P.M. to 12 A.M. </option>
  <option value="12to1am">12 A.M. to 1 A.M. </option> 
  <option value="12to1am">12 A.M. to 1 A.M. </option> 
  <option value="1to2am">1 A.M. to 2 A.M. </option> 
  <option value="2to3am">2 A.M. to 3 A.M. </option> 
  <option value="3to4am">3 A.M. to 4 A.M. </option> 
</select>
    </div>
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <div id = "stateError"> </div> 
  <label class="col-md-4 control-label" >Mode of Conveyence</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <select name="mode">
    <option value="bus"> Bus</option>
    <option value="railways">Railways</option>
    <option value="others">Others</option>
  </select> 
  </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <div id = "countryError"> </div> 
  <label class="col-md-4 control-label" >Station Where You Will Arrive</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <select name="station">
  <option value="hld"> Haldwani</option>
  <option value="pntgr">Pantnagar</option>
  <option value="rudr">Rudrapur</option>
  </select>
    </div>
  </div>
</div>



<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Require Accomodation?</label> 
  <div id = "pinError"> </div> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  
  <label>
  <input type="radio"  name="accomodation" value="yes" /> Yes
  </label>  
     &nbsp&nbsp&nbsp
 <label>
 <input type="radio" name="accomodation" value="no" checked="checked"/> No
                                </label>
    </div>
  </div>
</div>
<br>


<!-- Text input-->


       <div class="form-group">
  <label class="col-md-4 control-label">Choose Your Accomodation</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <select name="chooseAccomodation">
        <option value="not required">Accomodation Not required</option>
        <option value="raddison">Raddison Blu, Rudrapur</option>
        <option value="Guest House">Guest House, Pantnagar</option>
        <option value="others">Others</option>
        </select>
    </div>
  </div>
</div>



<!-- Button -->
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" name="submit" id="submit">Submit <span class="glyphicon glyphicon-send"></span></button>
    <input name="flag" type="hidden" />
  </div>
</div>


</fieldset>
</form>
</div>
    </div>
                     <div class="row">
                        <div class="uu-main-column-2"></div>
                        <div class="uu-main-column-3"></div>
                     </div>  
                     
               </div>
            </div>
         </main>
          <div id="footer">
        <div class="container">
          <center>Other Links</center>
            <ul class="list-inline row">
              <center>
                <li class="col-md-3"><a href="http://www.gbpuat-tech.ac.in" target="_blank">College Website</a></li>
                <li class="col-md-3"><a href="http://www.pantnagaralumni.org/" target="_blank" title="All India Pantnagar Alumni Association">A.I.P.A.A.</a></li>
                <li class="col-md-3"><a href="http://www.wpaa.org/" target="_blank" title="Worldwide Pantnagar Alumni Association">W.P.A.A.</a></li>
                <li class="col-md-3"><a href="http://www.gbpuat.ac.in" target="_blank">University Website</a></li>
              </center>
          </ul>
            <center style="font-size: 0.8em">© Pantnagar Technology Alumni Association(P.T.A.A.), Pantnagar | This site is designed by <a href="../webteam/webteam.html">College Website Team</a> and maintained by <a href="team.html">Alumni Cell (P.T.A.A. student representatives).</a></center>
        </div>
     </div>
        
      </div><script src="../ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script><script src="../templates/_main-v2/_scripts/vendor/bootstrap.min.js"></script><script src="../templates/_main-v2/_scripts/main.js"></script><script type="text/javascript" src="../_scripts/custom-scripts.js"></script>
   </body>

</html>
