    <?php
    error_reporting(0);
      require_once('connection.php');

       
  if(isset($_POST["submitname"]))
  
   {
     
          $UName=$_POST['USEX'];
          $Pass=$_POST['PSEX'];

           if(empty($UName)||empty($Pass))
            {
              
              
               
            }
            
          $query =" SELECT * FROM loginform WHERE User='$UName' AND Password='$Pass'";
          $result=mysqli_query($con,$query);
          

          if(mysqli_num_rows($result) > 0)
          {
           while($row = mysqli_fetch_assoc($result))
           {
             $role= $row["role"];
             
           }



          }
          

          if($role=='admin')
          {
            header("location:admin.php");
          }
           if($role=='user')
          {
            header("location:AppBody/admin.php");
          }
      else{
            
            echo" <h1>Incorrect credentials entered please check again </h1>";
            
          }
    
   }