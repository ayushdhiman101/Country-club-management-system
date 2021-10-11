<?php
   
$server="localhost";
$username="root";
$password="";
$dbname="login";

$conn =mysqli_connect($server,$username,$password,$dbname);
   

?>



<div class="article-container">
    <?php
	   $sql="SELECT * FROM member";
	   $result=mysqli_query($conn,$sql);
	   $queryResults =mysqli_num_rows($result);
	   
	   if($queryResults >0){
	   while($row = mysqli_fetch_assoc($result)){
	        echo "<div>
			     
                <table style=padding:10px;border-collapse: separate;border-spacing: 50px 0>
                <tr>
                <th>Member ID</th>
                <th>Member Name</th>
                <th>DOB</th>
                <th>DOJ</th>
                <th>Sex/th>
                <th>Status</th>
                <th>Card ID</th>
                <th>SportsID</th>
                <th>Blog ID</th>
                <th>Competition ID</th>
                <th>Events ID</th>
                <th>Movies ID</th>
                <th>Member Image</th>
				</tr>
				<br>
                <tr>
                <td style=padding;100px><p>".$row['MemberID']."</p></td>
                <td style=padding;100px><p>".$row['MemberName']."</p></td>
                <td style=padding;100px><p>".$row['dob']."</p></td>
                <td style=padding;100px><p>".$row['doj']."</p></td>
                <td style=padding;100px><p>".$row['Sex']."</p></td>
                <td style=padding;100px><p>".$row['Status']."</p></td>
                <td style=padding;100px><p>".$row['CardID']."</p></td>
                <td style=padding;100px><p>".$row['SportsID']."</p></td>
                <td style=padding;100px><p>".$row['BlogID']."</p></td>
                <td style=padding;100px><p>".$row['CompetitionID']."</p></td>
                <td style=padding;100px><p>".$row['EventsID']."</p></td>
                <td style=padding;100px><p>".$row['MoviesID']."</p></td>
                <td style=padding;100px><p>".$row['Image']."</p></td>
			  
			}
		
		 }
	  ?>
</div>	  
</body>
</html> 