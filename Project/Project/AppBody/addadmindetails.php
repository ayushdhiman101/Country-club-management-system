	<!--COPY-->




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
            <img class="img-responsive site-logo" alt="" src="../ResourcesNEW/logo.jpg">
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
        <li><a href="./admindetails.php" title="">Admin</a></li>


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








<body background="../ResourcesNEW/adminback.jpg" style=" background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">


<h1 style="text-align:center; font-size:25px;font-family: Calibri, Helvetica, sans-serif;" >

<form action="addadmindetails.php" method="POST">
     
     <input type="number" name="ID" placeholder="Admin I.D">
	 <br><br>
	 <input type="text" name="Name2" placeholder="Name">
	 <br><br>
	 <input type="text" name="field" placeholder="Field">
	 <br><br>
	 <input type="date" name="DOB" placeholder="DOB">
	 <br><br>
	 <input type="date" name="DOJ" placeholder="DOJ">
	 <br><br>
     <input type="number" name="Sal" placeholder="Salary">
	 <br><br>
   <input type="text" name="USER134" placeholder="Username">
	 <br><br>
   <input type="Password" name="PASS124" placeholder="Password">
	 <br><br>
	 <button type="submit" name="submit">ADD</button>
</form>	 	 
</h1>


<p style="text-align:center; font-size:25px;font-family: Calibri, Helvetica, sans-serif;" >

<?php 
error_reporting(0);

    $addminnID=$_POST['ID'];
	$Nam=$_POST['Name2'];
	$F=$_POST['field'];
	$DB=$_POST['DOB'];
    $DJ=$_POST['DOJ'];
    $money=$_POST['Sal'];
    $sql="INSERT INTO administration (number1,name,fieldofemployment,dob,doj,salary) VALUES('$addminnID','$Nam','$F','$DB','$DJ','$money');";
  mysqli_query($conn,$sql);
  

  $uuid=$_POST['USER134'];
  $ppid=$_POST['PASS124'];
  $sql2="INSERT INTO loginform (User,Password,role) VALUES('$uuid','$ppid','admin');";
  mysqli_query($conn,$sql2);
	
?>

	

</body>
</html>
	
	