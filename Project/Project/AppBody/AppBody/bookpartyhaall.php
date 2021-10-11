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








<body background="../../ResourcesNEW/partyhallback.jpg" style=" background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">


<h1 style="text-align:center; font-size:25px;font-family: Calibri, Helvetica, sans-serif;" >


<form action="bookpartyhaall.php" method="POST">
NOTE<br> Enter valid memeber ID <br> Only one function held in one day <br>Charges- Rupees 100 per Invitee<br><br>

<input type="number" name="asdewqr" placeholder="Party Hall">
	 <br>
     <input type="number" name="MIDS" placeholder="Member ID">
	 <br>
	 <input type="date" name="D" placeholder="Date of function">
	 <br>
	 <input type="time" name="t" placeholder="Time of function">
	 <br>
	 <input type="time" name="E" placeholder="End Time of function">
	 <br>
	 <input type="text" name="F" placeholder="Function Name">
	 <br>
      <input type="number" name="NOP" placeholder="No of invitees">
	 <br>
     

	 <button type="submit" name="submit">ADD</button>
</form>	  
</h1>


<p style="text-align:center; font-size:25px;font-family: Calibri, Helvetica, sans-serif;" >




<?php
error_reporting(0);
$MMIDS=$_POST['MIDS'];
$NOI=$_POST['NOP'];
$sex=100;
$suM=$sex*$NOI;
$sql="INSERT INTO cards (memberID,MonthBill,Reason) VALUES ('$MMIDS','$suM','PartyHall Booking');";
$result=mysqli_query($conn,$sql);
?>



<?php 
    
    $Dateoffunctio=$_POST['D'];
    $MMIDD=$_POST['MIDS'];
	$timeoffunctio=$_POST['t'];
	$Endtimeoffunctio=$_POST['E'];
  $Functionnam=$_POST['F'];
  $ppzia=$_POST['asdewqr'];
    $sql="INSERT INTO partyhalluser(PartHallID,memberID,Dateoffunction,timeoffunction,Endtimeoffunction,Functionname) VALUES('$ppzia', '$MMIDD','$Dateoffunctio','$timeoffunctio','$Endtimeoffunctio','$Functionnam');";
	mysqli_query($conn,$sql);
	
?>

</body>
</html>
	
	
