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


<h1 style='margin: auto;
  width: 60%;border: 5px solid khaki;padding: 5px;text-align:center;border-collapse: collapse; font-size: 30px;min-width: 400px;border-radius: 5px 5px 0 0;overflow: hidden;box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);'>
1000 INR charges for per sport  
</h1>


<h1 style="text-align:center; font-size:25px;font-family: Calibri, Helvetica, sans-serif;" >



<body background="../ResourcesNEW/memberback.jpg" style=" background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">


<form action="addmember.php" method="POST">
     <input type="text" name="MN" placeholder="Member Name">
	 <br>
   <label for="dobo" >DOB
	 <input type="date" name="dobo" placeholder="dob">
	 </label>
    <br>
   <label for="dojo">DOJ
	 <input type="date" name="dojo" placeholder="doj">
	 </label>
   <br>
	 <input type="char" name="Sexx" placeholder="Sex">
	 <br>
	 <input type="text" name="Statuss" placeholder="Status">
	 <br>
	 <input type="text" name="CID" placeholder="CardID">
	 <br>
   <input type="text" name="uname" placeholder="Username Setup">
	 <br>
   <input type="password" name="passs" placeholder="Password Setup">
	 <br>
	 <input type="checkbox" name="SID[]" value="1" >Football<br>
	 <input type="checkbox" name="SID[]" value="2">Basketball<br>
	 <input type="checkbox" name="SID[]" value="3">Swimming<br>
	 <input type="checkbox" name="SID[]" value="4">Golf<br>
	 <input type="checkbox" name="SID[]" value="5">Handball<br>
	 <input type="checkbox" name="SID[]" value="6">Polo<br>
	 <input type="checkbox" name="SID[]" value="7">Tennis<br>
	 <input type="checkbox" name="SID[]" value="8">Squash<br>
	 <input type="checkbox" name="SID[]" value="9">Badminton<br>
	 <input type="checkbox" name="SID[]" value="10">Horse Riding<br>
	 <br>
   
	 
	 
	 <button type="submit" name="submit">SIGN UP</button>
</form>	 




<?php
error_reporting(0);

$server="localhost";
$username="root";
$password="";
$dbname="login";

$conn =mysqli_connect($server,$username,$password,$dbname);


$query = "Select MAX(MemberID) AS MemberIDSsS FROM member";
$query_result = mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($query_result))
{
    $output=$row['MemberIDSsS'];
}
$maxxx=$output+1;



    $MemberName=$_POST['MN'];
	$dob=$_POST['dobo'];
    $doj=$_POST['dojo'];
	$Sex=$_POST['Sexx'];
	$Status=$_POST['Statuss'];
	$CardID=$_POST['CID'];
  $SpotrsID=$_POST['SID'];


  $ccdc=count($SpotrsID);
  

  $b=implode($SpotrsID);

  $UU=$_POST['uname'];
  $PP=$_POST['passs'];


  $class=1000;
  $classsex=$class*$ccdc;
  
  
	
    $sql="INSERT INTO member (MemberName,dob,doj,Sex,Status,CardID,sportsID) VALUES('$MemberName','$dob','$doj','$Sex','$Status','$CardID','$b');";
	mysqli_query($conn,$sql);

  $sql="INSERT INTO loginform (User,Password,role) VALUES('$UU','$PP','user');";
  mysqli_query($conn,$sql);

    $sql="INSERT INTO cards (memberID,MonthBill,Reason) VALUES('$maxxx','$classsex','Sports Bill');";
  mysqli_query($conn,$sql);


  









?>





</body>
</html>
	