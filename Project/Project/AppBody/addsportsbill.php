

<?php
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


?>
</h1>

