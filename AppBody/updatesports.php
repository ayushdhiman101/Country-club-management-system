<body background="../Resources/Untitled-5.jpg" >
<h1 style="text-align:center; font-size:25px;font-family: Calibri, Helvetica, sans-serif;" >


<form action="updatesports.php" method="POST">
	 <input type="number" name="I" placeholder="SportsI.D">
	 <br> <br>
	 <input type="text" name="N" placeholder="SportName">
     <br><br>
     <input type="number" name="M" placeholder="Cost">
	 <br> <br>
	  <button type="submit" name="ADD">ADD</button>
</form>	 
</h1>

<p style="text-align:center; font-size:25px;font-family: Calibri, Helvetica, sans-serif;" >

 <?php 
 
 
   
$server="localhost";
$username="root";
$password="";
$dbname="login";

$conn =mysqli_connect($server,$username,$password,$dbname);
  


    $ID=$_POST['I'];
    $name=$_POST['N'];
    $cc= $_POST['M'];
     echo"$ID";
     echo"$name";
     echo"$cc";
    
    $query = "UPDATE 'sports' SET 'sportname'='".$name."', 'Cost'=$cc where 'sportsID'=$ID";
    $result=mysqli_query($conn,$query);


	
	
	
      ?>




</body>
</html>
	