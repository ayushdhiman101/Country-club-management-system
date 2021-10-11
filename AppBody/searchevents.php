



<?php
$server="localhost";
$username="root";
$password="";
$dbname="login";

$conn =mysqli_connect($server,$username,$password,$dbname);

?>
<link href="./main.82cfd66e.css" rel="stylesheet">
<body background="../ResourcesNEW/eventsback.jpg" style=" background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">
<h1 style="text-align:center; font-size:25px;font-family: Calibri, Helvetica, sans-serif;" >
<form action="searchevents.php" method="POST">
    
    <input type="text" name="search" placeholder="Search">
	<button type="submit" name="submit-search" size="100%">Search</button>
</form>
</h1>
	
</body>

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
</header>
<main class="" id="main-collapse">




<div class="article-container" style="text-align:center; font-size:25px;font-family: Calibri, Helvetica, sans-serif;">
<h1>Search Result</h1>
<?php
   
   if(isset($_POST['submit-search'])){
	   $search=mysqli_real_escape_string($conn,$_POST['search']);
	   $sql="SELECT * FROM eventss WHERE eventsID LIKE '%$search%' OR eventname LIKE '%$search%' OR eventdate LIKE '%$search%' OR eventtime LIKE '%$search%' ";
	   $result = mysqli_query($conn,$sql);
	   $queryResult=mysqli_num_rows($result);
	   
	   echo "There are ".$queryResult."results!";
	   
	   if($queryResult >0){
       error_reporting(0);

 echo "<div>
			     
                <table style='text-align:center;border-collapse: collapse;margin: 25px 0; font-size: 30px;min-width: 400px;border-radius: 5px 5px 0 0;overflow: hidden;box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);'>
     <tr style='color:white ;background-color: #5D6D7E ;text-align: left;font-weight: bold;padding: 12px 15px;'>
                <th style='padding: 12px 15px;'>Event ID</th>
                <th style='padding: 12px 15px;'>Event Name</th>
                <th style='padding: 12px 15px;'>Event Date</th>
                <th style='padding: 12px 15px;'>Event Time</th>
                <th style='padding: 12px 15px;'>Event Price</th>
				</tr>";






	     while($row =mysqli_fetch_assoc($result)){
		
				echo"
                 <tr style='font-size: 20px;font-size: 20px;background-color: #f3f3f3; border-bottom: 10px solid khaki;font-weight: bold;'>
                <td style='padding: 12px 15px;'><p>".$row['eventsID']."</p></td>
                <td style='padding: 12px 15px;'><p>".$row['eventname']."</p></td>
                <td style='padding: 12px 15px;'><p>".$row['eventdate']."</p></td>
                <td style='padding: 12px 15px;'><p>".$row['eventtime']."</p></td>
                <td style='padding: 12px 15px;'><p>".$row['costofeachticket']."</p></td>
    
                 </tr>
 
                
				 
	          </div>";
			 } 
	   }else{
	       echo "There are no result matching your search!";
		   }
	}   
?>
</div>





