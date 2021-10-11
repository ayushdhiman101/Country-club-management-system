<?php
 
$server="localhost";
$username="root";
$password="";
$dbname="login";

$conn =mysqli_connect($server,$username,$password,$dbname);
   

?>

<form action="searchcomeptition.php" method="POST">
    <input type="text" name="search" placeholder="Search">
	<button type="submit" name="submit-search">Search</button>
</form>

<h1>Front page</h1>
<h2>All articles:</h2>

<div class="article-container">
    <?php
	   $sql="SELECT * FROM competitions";
	   $result=mysqli_query($conn,$sql);
	   
	   while($row = mysqli_fetch_assoc($result)){
			 
		echo"
		<div>
			     
                <table style=padding:10px;border-collapse: separate;border-spacing: 50px 0>
                <tr>
                <th>Competition ID</th>
                <th>Competition Name</th>
                <th>Competition Date</th>
                <th>Competition Time</th>
                <th>Sports ID </th>
				</tr>
				<br>
                <tr>
                <td style=padding;100px><p>".$row['competitionID']."</p></td>
                <td style=padding;100px><p>".$row['competitionName']."</p></td>
                <td style=padding;100px><p>".$row['competitiondate']."</p></td>
                <td style=padding;100px><p>".$row['competitiontime']."</p></td>
                <td style=padding;100px><p>".$row['sportsID']."</p></td>
    
                 </tr>
 
                </table>
				 
			  </div>
			  
			  "
			}
		
		 }
	  ?>
</div>	  
</body>
</html> 
   <tr>
                