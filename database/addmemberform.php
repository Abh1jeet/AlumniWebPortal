<?php
require_once "connection.php" ;
$message=" ";

 	if(isset($_POST['submit'])){
 	$id= $_POST['idnumber'] ;
  if(!empty($id))
 	{
 	$fName = mysqli_real_escape_string($conn,$_POST['fname']);

 	$midName = mysqli_real_escape_string($conn,$_POST['midname']);
 	$lName= mysqli_real_escape_string($conn,$_POST['lname']);
 	$batch =  mysqli_real_escape_string($conn, $_POST['batch']);
 	$branch = mysqli_real_escape_string($conn, $_POST['branch']);
	$gender = $_POST['gender'];
 	$line1 = mysqli_real_escape_string($conn,$_POST['line1']);
 	$line2 = mysqli_real_escape_string($conn,$_POST['line2']);
 	$city = mysqli_real_escape_string($conn,$_POST['city']);
 	$country = mysqli_real_escape_string($conn,$_POST['country']); 
 	$state = mysqli_real_escape_string($conn,$_POST['state']); 
 	$pin = $_POST['pin'];
 	$email = mysqli_real_escape_string($conn,$_POST['email']);
 	$linkedin = mysqli_real_escape_string($conn,$_POST['linkedin']);
 	$fb = mysqli_real_escape_string($conn,$_POST['facebook']);
 	$std = mysqli_real_escape_string($conn,$_POST['std']);
 	$landline = $_POST['phone'];
 	$countryCode = mysqli_real_escape_string($conn,$_POST['countrycode']);
 	$mobile = $_POST['mobile'];
 	$organistaion = mysqli_real_escape_string($conn,$_POST['organisation']);
 	$designation = mysqli_real_escape_string($conn,$_POST['designation']);
 	$officeStd = mysqli_real_escape_string($conn,$_POST['officestd']);
 	$officeNo = $_POST['officephone'];
 	$profession = mysqli_real_escape_string($conn,$_POST['profession']);
 	$expertise = mysqli_real_escape_string($conn,$_POST['expertise']);
//echo "$branch";
	$sql = "INSERT INTO alumni_db
	VALUES ('$id','$fName','$midName','$lName','$batch', '$branch','$gender','$line1','$line2','$city','$country','$state','$pin','$email','$linkedin','$fb','$std','$landline','$countryCode','$mobile','$organistaion','$designation','$officeStd','$officeNo','$profession','$expertise')";

	if ($conn->query($sql) === TRUE) {
		$message = "Thank You! Your record has been added successfully." ;
 		
	   
	} else {
	  $message = "Sorry! The form could not be submitted, probably your record already exists.". mysql_error();
		}	
	}
 	
 	
}
$conn->close();
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
      <meta name="keywords" content="ptaa, gbpuat, alumni, alumni meet, samanvay, cot, college of technology, G.B. Pant University, register, myself, yourself">
      <title>Alumni Database - Add your Record</title>
      <script src="../ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="addmembervalid.js"></script>
      <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <!--<script type="text/javascript" src="boot/js/npm.js"></script>-->
      <link rel="shortcut icon" href="../_images/favicon.ico" type="image/x-icon">
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
      <!-- Code to be included before the closing </head> tag can go here -->

</head>
   <body class="three-column-left nav-menu-wrap nav-tracking-off"><!-- Code to be included after the opening <body> tag can go here -->
      <div class="uu-page-wrapper">
         <header class="uu-header" role="banner">
            <div class="uu-container"><a href="#uu-skip-target" class="uu-skip-nav">Skip to Main Content</a><div class="uu-header-logo"><a href="../index.html"><img src="../templates/_main-v2/_images/header/logo/uu-logo.png" alt="PTAA logo" style="height: 80px;width: 200px;position:
relative;"></a>
</div>
               <nav class="uu-nav navbar navbar-inverse" role="navigation">
                  <h2 class="sr-only">Main Navigation</h2>
                  <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#top-nav"><span class="sr-only">Toggle navigation</span><span class="toggle-text">Menu</span><span class="icon-bar-group"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></span></button></div>
                  <div class="collapse navbar-collapse" id="top-nav"><ul class="nav navbar-nav navbar-right">
    <li>
      <a href="addmemberform.php">add your record</a>
   </li>
   <li>
      <a href="searchmember.php">alumni search</a>
   </li>
   <li>
      <a href="corrections.html">Correction of personal details</a>
   </li>
</div>
               </nav>
            </div>
            <div class="uu-header-title">
               <div class="uu-container"><h1 style="color:white">Alumni Database</h1>
            </div>
            </div>
         </header>
         <div class="uu-breadcrumb">
            <div class="uu-container">
               <p class="sr-only">You are here:</p>
               <ol class="breadcrumb">
                  <li><a href="../index.html">Home</a></li>
                  <li>Alumni Database</li>
                  <li><a href="#">Add your record</a></li>
               </ol>
            </div>
         </div>
         <main class="uu-main" role="main">
            <div class="uu-container">
               <div class="uu-main-top row" id="uu-skip-target">
                  <div class="uu-top-content">
                     <h1 style="color:inherit">Add Your Record</h1>
                  </div>
               </div>
               <div class="uu-main-bottom row">
                  <div class="uu-main-column">
                     <div class="uu-main-content">
                        <div class="panel">
                             <div class="container">

    <form class="well form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?> " method="POST"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>Enter your details!</legend>


<div id ="errorMessage" style="font-size: 1.5em; color: #C00;">
<?php echo $message ;?>
</div>
<!-- Text input-->
<h3 style = "text-align:center;">Personal Details</h3>
<p class="text-danger" style = "text-align:center;">Fields marked with * are Required </p>
<div class="form-group">
  <label class="col-md-4 control-label">Id Number*</label>  
  <div id = "idError"> </div> 
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="idnumber" placeholder="ID Number" class="form-control"  pattern="\d*" maxlength="5" minlength="3" required="required">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >First Name*</label> 
  <div id = "fnameError"> </div>    
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="fname" id="fname" placeholder="First Name" class="form-control"  type="text" required="required" >
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Middle Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="midname" id="midname" placeholder="Middle Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name*</label> 
  <div id = "lnameError"> </div> 
     <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="lname" id="lname" placeholder="Last Name" class="form-control"  type="text" required="required">
    </div>
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" >Batch*</label> 
  <div id = "lnameError"> </div> 
     <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="batch" id="batch" placeholder="Batch" class="form-control" minlength="4" maxlength="4" pattern="\d*" type="\d*" required="required">
    </div>
  </div>
</div>


 <div class="form-group">
  <label class="col-md-4 control-label">Branch*</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <select name="branch" id="branch" placeholder="branch" class="form-control"  >

 
      <option value="Computer Engineering" name="Computer Engineering">Computer Engineering</option>
      <option value="Electrical Engineering" name="Electrical Engineering" id="Electrical engineering">Electrical Engineering</option>

      <option value="Information Technology" name="Information Technology">Information Technology</option>
      <option value="Mechanical Engineering" name="Mechanical Engineering" id="Mechanical engineering">Mechanical Engineering</option>

      <option value="Agricultural Engineering" name="Agricultural Engineering">Agricultural Engineering</option>
      <option value="Civil Engineering" name="Civil engineering" id="Civil engineering">Civil Engineering</option>

      <option value="Electronics and Communication Engineering" name="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
      <option value="Industrial and Production Engineering" name="Industrial and Production Engineering" id="Industrial and Production engineering">Industrial and Production Engineering</option>
  </select>
    </div>
  </div>
 </div>


 <!-- radio checks -->
 <div class="form-group">
                        <label class="col-md-4 control-label">Gender*</label>
                        <div id = "genderError"> </div> 
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" id="gender" value="female" required="required" /> Female
                                </label>
                            
                            &nbsp&nbsp&nbsp
                                <label>
                                    <input type="radio" name="gender" value="male" required="required" /> Male
                                </label>
                            </div>
                        </div>
                    </div>


<!-- Needs Styling-->
<h3 style = "text-align:center;">Address</h3>

    
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Address Line 1*</label> 
  <div id = "addressError"> </div> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="line1" id="line1" placeholder="Address Line 1" class="form-control"  type="text" required="required">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Address Line 2</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="line2" id="line2" placeholder="Address Line 2" class="form-control"  type="text" >
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >City*</label> 
  <div id = "cityError"> </div> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="city" id="city" placeholder="City" class="form-control"  type="text" required="required">
    </div>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <div id = "stateError"> </div> 
  <label class="col-md-4 control-label" >State*</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="state" id="state " placeholder="State" class="form-control"  type="text" required="required">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <div id = "countryError"> </div> 
  <label class="col-md-4 control-label" >Country*</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="country" id="country" placeholder="Country" class="form-control"  type="text" required="required">
    </div>
  </div>
</div>



<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Pin Code*</label> 
  <div id = "pinError"> </div> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="pin" id="pin" placeholder="Pin Code" class="form-control"  pattern="\d*" maxlength="6" minlength="5" required="required">
    </div>
  </div>
</div>
<br>

<!-- Text input-->
<h3 style = "text-align:center;">Contact Details</h3>

       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail (Optional) </label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" id="email" placeholder="E-Mail Address" class="form-control"  type="email" >
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">LinkedIn Link(Optional)</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="linkedin" id="linkedin" placeholder="LinkedIn Link" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">Facebook Link(Optional)</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="facebook" id="facebook" placeholder="Facebook Link" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Landline Number(Optional)</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
<span>
  <input name="std" id="std" placeholder="STD Code" minlength="2" maxlength="5" class="form-control" pattern="\d*" type="\d*">    
 </span> 
<span>
  <input name="phone" id="phone" placeholder="Phone Number" class="form-control"  minlength="5" maxlength="8" pattern="\d*">
</span>    
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Mobile Number*</label>  
  <div id = "mobileError"> </div> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
<span>
  <input name="countrycode" id="countrycode" placeholder="Country Code (+91 - INDIA)"  minlength="2" maxlength="4" class="form-control" type="text" required="required">    
 </span> 
<span>
  <input name="mobile" id="mobile" placeholder="Mobile Number" class="form-control" pattern="\d*" maxlength="10" minlength="10" required="required" />
</span>    
    </div>
  </div>
</div>


<h3 style="text-align: center;"> Professional Details (Optional)</h3>
<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Organisation</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="organisation" id="organisation" placeholder="Organisation" class="form-control" type="text" >
    </div>
  </div>
</div>

<!-- Text input-->
 
<div class="form-group">
  <label class="col-md-4 control-label">Designation</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="designation" id="designation" placeholder="Designation" class="form-control"  type="text" >
    </div>
  </div>
</div>

<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Office Phone Number </label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
<span>
  <input name="officestd" id="officestd" placeholder="STD Code" maxlength="2" minlength="5" class="form-control" pattern="\d*" >    
 </span> 
<span>
  <input name="officephone" id="officephone" placeholder="Phone Number" maxlength="5" minlength="8" class="form-control" pattern="\d*">
</span>    
    </div>
  </div>
</div>


<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Profession</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="profession" id="profession" placeholder="Profession" class="form-control"  type="text">
    </div>
</div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">Area of Expertise</label>  
   <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
  <input name="expertise" id="expertise" placeholder="Area of Expertise" class="form-control" type="text">
    </div>
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" name="submit" id="submit">Submit <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div>
                           </div>
                        </div>
                        <div class="panel">
                           
                        </div>
                        <div class="panel">
                          
                           </div>
                        
                        <div class="panel">
                           
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
            <center style="font-size: 0.8em">© Pantnagar Technology Alumni Association(P.T.A.A.), Pantnagar | This site is designed by <a href="../webteam/webteam.html">College Website Team</a> and maintained by <a href="../samanvay/team.html">Alumni Cell (P.T.A.A. student representatives).</a></center>
        </div>
     </div>
      </div>
      <script src="../templates/_main-v2/_scripts/vendor/bootstrap.min.js"></script><script src="../templates/_main-v2/_scripts/main.js"></script><script type="text/javascript" src="../_scripts/custom-scripts.js"></script>
   </body>

</html>