<head>
<link href="./main.82cfd66e.css" rel="stylesheet"></head>



<h1 style="text-align:center; font-size:25px;font-family: Calibri, Helvetica, sans-serif;">
<form action="monthbillclear.php">
<input type="text" name="asdg" id="asdg" placeholder='Member ID '>
<input type="submit" value="Delete Sports Bill">
</form>
  </a>
  </h1>


<?php

error_reporting(0);
$server="localhost";
$username="root";
$password="";
$dbname="login";

$conn =mysqli_connect($server,$username,$password,$dbname);
 $TNo=$_GET['asdg'];
 $sql="DELETE FROM cards WHERE memberID =$TNo";
 
 mysqli_query($conn,$sql);

 ?>















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
<link href="./main.82cfd66e.css" rel="stylesheet">
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

<body background="../ResourcesNEW/billback.jpg" style=" background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">





<!--INDEX file -->

<?php
 
$server="localhost";
$username="root";
$password="";
$dbname="login";

$conn =mysqli_connect($server,$username,$password,$dbname);
   


?>




<div class="article-container">
    <?php
	   $sql="SELECT * FROM cards";
     $result=mysqli_query($conn,$sql);
     $queryResults =mysqli_num_rows($result);
	   
	   if($queryResults >0){
    echo "
      <table style='text-align:center;border-collapse: collapse;margin: 25px 0; font-size: 30px;min-width: 400px;border-radius: 5px 5px 0 0;overflow: hidden;box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);'>
     <tr style='color:white ;background-color: #5D6D7E ;text-align: left;font-weight: bold;padding: 12px 15px;'>
	            <th style='padding: 12px 15px;'>Member ID</th>
                <th style='padding: 12px 15px;'>Bills</th>
                <th style='padding: 12px 15px;'>Reason</th>
				</tr>";
	   while($row = mysqli_fetch_assoc($result)){
			 
		echo"<div>
			     
                <tr style='font-size: 20px;background-color: #f3f3f3; border-bottom: 10px solid khaki;font-weight: bold;'>
                <td style='padding: 12px 15px;'><p>".$row['memberID']."</p></td>
                <td style='padding: 12px 15px;'><p>".$row['MonthBill']."</p></td>
                <td style='padding: 12px 15px;'><p>".$row['Reason']."</p></td>
                
    
                 </tr>
 
				 
        </div>";
               
			}
		
    }
	  ?>
</div>	  
</body>
</html> 
   <tr>
                












