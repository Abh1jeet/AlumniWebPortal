<?php
  if(isset($_POST['search']))$search=$_POST['search'];
  if(isset($_POST['val']))$val = htmlspecialchars($_POST['val']);
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
      <meta name="keywords" content="ptaa, gbpuat, alumni, alumni meet, samanvay, cot, college of technology, G.B. Pant University, search, records">
      <title>Alumni Database - Search Member</title>
      <link rel = "stylesheet" href="addmemberform.css">
      <script src="../ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="addmembervalid.js"></script>
      <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="shortcut icon" href="../_images/favicon.ico" type="image/x-icon">
      <link href="../templates/_main-v2/_css/main.css" rel="stylesheet" type="text/css" media="all">
      <link href="../added_files/css/style.css" rel="stylesheet" type="text/css" media="all">
      <link href="../_css/custom-styles.css" rel="stylesheet" type="text/css" media="all">
      <style type="text/css">
        .btn-warning {
          color: #fff;
          background-color: #f1a233;
          border-color: #eea236;
          border-radius: 4px;
        }
        
        .btn-warning:hover,.btn-warning:active,.btn-warning:focus {
          color: #fff;
          cursor: pointer;
          background-color: #ec971f;
          border-color: #d58512;
        }
  table{
    
    border-collapse: collapse ;
    width:102%;
  }
  th,td  {
   padding: 10px ;

  }
th  {
  border-bottom: 1px solid grey ;
}
/*.result {
  overflow: scroll;
}*/
#heading  {
  font : black;
}
.nf {
  color: #C00;
  font-size: 1.5em;
  margin-top: 50px;
}  


</style>

  
      
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

   <body class="three-column-left nav-menu-wrap nav-tracking-off">
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
                  <li><a href="#">Search member</a></li>
               </ol>
            </div>
         </div>
         <main class="uu-main" role="main">
            <div class="uu-container">
               <div class="uu-main-top row" id="uu-skip-target">
                  <div class="uu-top-content">
                  </div>
               </div>
               <div class="uu-main-bottom row">
                  <div class="uu-main-column">
                     <div class="uu-main-content">
                        <div class="panel">
                             <div class="container">
  

    

<!-- Form Name -->


<!-- Text input-->
<div class="jumbotron" style="padding-top: 0px;">
  
  <!-- <span style="color:inherit">Search for a member</span> -->
  
  <!-- abhijeet wala -->
<p id='dasad' style="text-align:center; font:black; font-size:40px">SEARCH</p>

<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">

     <label class=" control-label">Select Field  </label>  
    <div class="">
    <select name="search" id="search" placeholder="search" class="form-control" required="required">
    <option value="name" name="name" id="name" <?php if(isset($search)&&$search=='name') echo "selected";?>>Name</option>
  <option value="idno" name="idno" id="idno" <?php if(isset($search)&&$search=='idno') echo "selected";?>>Id No</option>
  <option value="batch" name="batch" id="batch" <?php if(isset($search)&&$search=='batch') echo "selected";?>>Batch</option>
  <option value="branch" name="branch" id="branch" <?php if(isset($search)&&$search=='branch') echo "selected";?>>Branch</option>

  </select>
  </div>

<div class="form-group">
  <label class="control-label" >Enter value to be searched</label>  
    <div class="inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
  <input name="val" id="val" placeholder="search" class="form-control"  type="text" required="required" value="<?php if(isset($val)) echo $val;?>">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" name="submit" id="submit">Submit <span class="glyphicon glyphicon-send"></span></button>
    <input name="flag" type="hidden" />
  </div>
</div>

</form>
<div class="result" >


<?php


$user_name="root";
$host_name="localhost";
$admin_password="wewillrockyou";
$conn = mysqli_connect($host_name,$user_name,$admin_password);
@mysql_connect($host_name,$user_name,$admin_password);
@mysql_select_db("alumni")or die(mysql_error());


if(isset($_POST['search'])&&isset($_POST['val']))
  {
$search=mysqli_real_escape_string($conn,$_POST['search']);
$val=mysqli_real_escape_string($conn,$_POST['val']);

if($search=='idno')
 { 
$queryl="SELECT * FROM `alumni_db` WHERE `id_number` = '$val' ";
  $queryl_run=mysql_query($queryl);
 if(mysql_num_rows($queryl_run)==0)
  {echo "<br /><div class='nf'>No records found</div>";}
 else
  {
echo "<table>
          <tr> 
        <th>Id Number</th>
        <th>Name</th>
        <th>Branch</th>
        <th>Batch</th>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>Country</th>
        <th>Contact no.</th>
        <th>Email-Id</th>
        " ;
    while($res=mysql_fetch_assoc($queryl_run))
{
   $email = "" ;
     
          $email = $res['email'] ;
          if(strlen($email) == 0)  {
            $email = "Not Available" ;
          }  
echo "<tr>" ;
          echo "<td>" . $res['id_number'] . "</td>" ; 
          echo "<td>" . $res['fname'] . " " . $res['midname'] . " " . $res['lname'] . "</td> " ;
          echo "<td>" . $res['branch'] . "</td>" ; 
          echo "<td>" . $res['batch'] . "</td>" ; 
          echo "<td>" . $res['address1'] . " " .$res['address2'] . "</td>";
          echo "<td>" . $res['city'] . "</td>" ;
          echo "<td>" . $res['state'] . "</td>" ;
          echo "<td>" . $res['country'] . "</td>" ;
          echo "<td>" . $res['countrycode'] . " " . $res['mobile'] . "</td>" ;
          echo "<td>" . $email . "</td>" ;
           echo "</tr>" ;
           echo "<br>" ;
 
  
} echo "</table>";
  }
}
else if($search=='name')


{
$queryl="SELECT * FROM `alumni_db` WHERE `fname` = '$val' ";
  $queryl_run=mysql_query($queryl);
 if(mysql_num_rows($queryl_run)==0)
  {echo "<br /><div class='nf'>No records found</div>";}
 else
  {

echo "<table>
          <tr> 
        <th>Id Number</th>
        <th>Name</th>
        <th>Branch</th>
        <th>Batch</th>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>Country</th>
        <th>Contact no.</th>
        <th>Email-Id</th>
        " ;
    while($res=mysql_fetch_assoc($queryl_run))
{
   $email = "" ;
     
          $email = $res['email'] ;
          if(strlen($email) == 0)  {
            $email = "Not Available" ;
          }  
echo "<tr>" ;
          echo "<td>" . $res['id_number'] . "</td>" ; 
          echo "<td>" . $res['fname'] . " " . $res['midname'] . " " . $res['lname'] . "</td> " ;
          echo "<td>" . $res['branch'] . "</td>" ; 
          echo "<td>" . $res['batch'] . "</td>" ; 
          echo "<td>" . $res['address1'] . " " .$res['address2'] . "</td>";
          echo "<td>" . $res['city'] . "</td>" ;
          echo "<td>" . $res['state'] . "</td>" ;
          echo "<td>" . $res['country'] . "</td>" ;
          echo "<td>" . $res['countrycode'] . " " . $res['mobile'] . "</td>" ;
          echo "<td>" . $email . "</td>" ;
           echo "</tr>" ;
           echo "<br>" ;
 
  
} echo "</table>";
  }
 
}
else if ($search=='batch') {
  $queryl="SELECT * FROM `alumni_db` WHERE `batch` = '$val' ";
  $queryl_run=mysql_query($queryl);
 if(mysql_num_rows($queryl_run)==0)
  {echo "<br /><div class='nf'>No records found</div>";}
 else
  {
echo "<table>
          <tr> 
        <th>Id Number</th>
        <th>Name</th>
        <th>Branch</th>
        <th>Batch</th>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>Country</th>
        <th>Contact no.</th>
        <th>Email-Id</th>
        " ;
    while($res=mysql_fetch_assoc($queryl_run))
{
   $email = "" ;
     
          $email = $res['email'] ;
          if(strlen($email) == 0)  {
            $email = "Not Available" ;
          }  
echo "<tr>" ;
          echo "<td>" . $res['id_number'] . "</td>" ; 
          echo "<td>" . $res['fname'] . " " . $res['midname'] . " " . $res['lname'] . "</td> " ;
          echo "<td>" . $res['branch'] . "</td>" ; 
          echo "<td>" . $res['batch'] . "</td>" ; 
          echo "<td>" . $res['address1'] . " " .$res['address2'] . "</td>";
          echo "<td>" . $res['city'] . "</td>" ;
          echo "<td>" . $res['state'] . "</td>" ;
          echo "<td>" . $res['country'] . "</td>" ;
          echo "<td>" . $res['countrycode'] . " " . $res['mobile'] . "</td>" ;
          echo "<td>" . $email . "</td>" ;
           echo "</tr>" ;
           echo "<br>" ;
 
  
} echo "</table>";
}}
    
else if ($search=='branch') {
  $queryl="SELECT * FROM `alumni_db` WHERE `branch` LIKE '%$val%' ";
  $queryl_run=mysql_query($queryl);
 if(mysql_num_rows($queryl_run)==0)
  {echo "<br /><div class='nf'>No records found</div>";}
 else
  {
echo "<table>
          <tr> 
        <th>Id Number</th>
        <th>Name</th>
        <th>Branch</th>
        <th>Batch</th>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>Country</th>
        <th>Contact no.</th>
        <th>Email-Id</th>
        " ;
    while($res=mysql_fetch_assoc($queryl_run))
{
   $email = "" ;
     
          $email = $res['email'] ;
          if(strlen($email) == 0)  {
            $email = "Not Available" ;
          }  

          echo "<tr>" ;
          echo "<td>" . $res['id_number'] . "</td>" ; 
          echo "<td>" . $res['fname'] . " " . $res['midname'] . " " . $res['lname'] . "</td> " ;
          echo "<td>" . $res['branch'] . "</td>" ; 
          echo "<td>" . $res['batch'] . "</td>" ; 
          echo "<td>" . $res['address1'] . " " .$res['address2'] . "</td>";
          echo "<td>" . $res['city'] . "</td>" ;
          echo "<td>" . $res['state'] . "</td>" ;
          echo "<td>" . $res['country'] . "</td>" ;
          echo "<td>" . $res['countrycode'] . " " . $res['mobile'] . "</td>" ;
          echo "<td>" . $email . "</td>" ;
           echo "</tr>" ;
           echo "<br>" ;
 
  
} echo "</table>";}
  }}

?>
</div>
</div>
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
            <center style="font-size: 0.8em">© Pantnagar Technology Alumni Association(P.T.A.A.), Pantnagar | This site is designed by <a href="../webteam/webteam.html">College Website Team</a> and maintained by <a href"../samanvay/team.html">Alumni Cell (P.T.A.A. student representatives).</a></center>
        </div>
     </div>
      </div>
      <script src="../templates/_main-v2/_scripts/vendor/bootstrap.min.js"></script>
      <script src="../templates/_main-v2/_scripts/main.js">
      </script><script type="text/javascript" src="../_scripts/custom-scripts.js"></script>
<script type="text/javascript">
  $('#search').change(function(){
    document.getElementById('val').value=" ";
  });
</script>
   </body>
</html>
