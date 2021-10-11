<?php
$server="localhost";
$username="root";
$password="";
$dbname="login";

$conn =mysqli_connect($server,$username,$password,$dbname);
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>

<!-- Add your content of header -->
<header class="">
  <div class="navbar navbar-default visible-xs">
    <button type="button" class="navbar-toggle collapsed">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    MA Country Club
  </div>

  <nav class="sidebar">
    <div class="navbar-collapse" id="navbar-collapse">
      <div class="site-header hidden-xs">
          <a class="site-brand" href="./index.html" title="">
            <img class="img-responsive site-logo" alt="" src="../../ResourcesNEW/logo.jpg">
            MA Country Club
          </a>
        <p>Where Luxury Meets Comfort.</p>
      </div>
      <ul class="nav">
     <a href="../admin.php" title="">Home</a></li>
        <li><a href="./memberdetails.php" title="">Member Details</a></li>
        <li><a href="./events.php" title="">Events</a></li>
        <li><a href="./sports.php" title="">Sports</a></li>
        <li><a href="./competitions.php" title="">Competitions</a></li>
        <li><a href="./partyhall.php" title="">Party Hall</a></li>
        <li><a href="./movies.php" title="">Movies</a></li>
        <li><a href="./advertisment.php" title="">Advertisment</a></li>
        <li><a href="./blog.php" title="">Blog</a></li>
        <li><a href="./monthbill.php" title="">Bill</a></li>

      </ul>

      <nav class="nav-footer">
        <p class="nav-footer-social-buttons">
          <a class="fa-icon" href="https://www.instagram.com/ayush.dhiman_" title="">
            <i class="fa fa-instagram"></i>
          </a>
          <a class="fa-icon" href="https://dribbble.com/" title="">
            <i class="fa fa-dribbble"></i>
          </a>
          <a class="fa-icon" href="https://twitter.com/" title="">
            <i class="fa fa-twitter"></i>
          </a>
        </p>
        <p>© Untitled | Website created by Create website by Ayush Dhiman</a>
      </nav>  
    </div> 
  </nav>
  <link href="./main.82cfd66e.css" rel="stylesheet">
</header>
<main class="" id="main-collapse">








<body background="../../ResourcesNEW/eventsback.jpg" style=" background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">


<h1 style="text-align:center; font-size:25px;font-family: Calibri, Helvetica, sans-serif;" >


<form action="bookevent.php" method="post">

<br><br>
     <input type="number" name="CID" placeholder="Event I.D">
	 <br><br>
	 <input type="number" name="MID" placeholder="Member ID">
	 <br><br>
	 <input type="number" name="TN" placeholder="Number of tickets">
	 <br><br>
	 <button style='color:red;'type="submit" name="submit">Book</button>
</form>	 
</h1>


<p style="text-align:center; font-size:25px;font-family: Calibri, Helvetica, sans-serif;" >




<?php
error_reporting(0);
$compiTime2=$_POST['TN'];
$compiID2=$_POST['CID'];
$var=1000;
$Sum=$var * $compiTime2;


$compiDate1=$_POST['MID'];
$sql="INSERT INTO cards (memberID,MonthBill,Reason) VALUES ('$compiDate1','$Sum','Event Booking ID -$compiID2');";
$result=mysqli_query($conn,$sql);
?>

<?php 



  $compiID=$_POST['CID'];
	$compiDate=$_POST['MID'];
	$compiTime=$_POST['TN'];

  $sql="INSERT INTO eventbooking (eventID,memberID,numberofmembers) VALUES ('$compiID','$compiDate','$compiTime');";
  
  $result=mysqli_query($conn,$sql);

	    

?>

	

</body>
</html>
	
	
