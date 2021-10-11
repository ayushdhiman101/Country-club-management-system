<?php
   
$server="localhost";
$username="root";
$password="";
$dbname="login";

$conn =mysqli_connect($server,$username,$password,$dbname);
   

?>

<form action="searchsports.php" method="POST">
    <input type="text" name="search" placeholder="Search">
	<button type="submit" name="submit-search">Search</button>
</form>

<h1>Front page</h1>
<h2>All articles:</h2>

<div class="article-container">
    <?php
	   $sql="SELECT * FROM sports";
	   $result=mysqli_query($conn,$sql);
	   $queryResults =mysqli_num_rows($result);
	   
	   if($queryResults >0){
	   while($row = mysqli_fetch_assoc($result)){
	         echo "<div>
			     
                <table style=padding:10px;border-collapse: separate;border-spacing: 50px 0>
                <tr>
                <th>Sports ID</th>
                <th>Sport Name</th>
				</tr>
				<br>
                <tr>
                <td style=padding;100px><p>".$row['sportsID']."</p></td>
                <td style=padding;100px><p>".$row['sportname']."</p></td>
    
                 </tr>
 
                </table>
				 
	          </div>";
			}
		
		 }
	  ?>
</div>	  
</body>
</html> 