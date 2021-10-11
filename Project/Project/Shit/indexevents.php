<?php
   
$server="localhost";
$username="root";
$password="";
$dbname="login";

$conn =mysqli_connect($server,$username,$password,$dbname);
   

?>

<form action="searchevents.php" method="POST">
    <input type="text" name="search" placeholder="Search">
	<button type="submit" name="submit-search">Search</button>
</form>

<h1>Front page</h1>
<h2>All articles:</h2>

<div class="article-container">
    <?php
	   $sql="SELECT * FROM events";
	   $result=mysqli_query($conn,$sql);
	   $queryResults =mysqli_num_rows($result);
	   
	   if($queryResults >0){
	   while($row = mysqli_fetch_assoc($result)){
	        echo "<div>
			     <h3>".$row['eventsID']."</h3>
				 <p>".$row['eventname']."</p>
				 <p>".$row['eventdate']."</p>
				 <p>".$row['eventtime']."</p>
				 <p>".$row['costofeachticket']."</p>
				 
	          </div>";
			  
			}
		
		 }
	  ?>
</div>	  
</body>
</html> 