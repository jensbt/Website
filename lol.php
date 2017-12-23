<?php
     $user = $_GET['username'];
     $pass = $_GET['password'];
 
     $sqlconnection = mysqli_connect("localhost", "root", "root", "Information");
     if(mysqli_connect_errno()) { 
         echo"failed to connect".mysqli_connect_error(); 
     }
 
     if(isset($user) && isset($pass)) {
         $query = "SELECT * FROM Pumps WHERE id = '".$user."' ";
         $result = mysqli_query($sqlconnection, $query);
 
         if ($result->num_rows == 0) {
             echo "Nope";
         } else {
             while($row = $result->fetch_assoc()) {
        	 echo    $row["info"] . "/" .  $row["waterLevel"] ;
    		}
         }
     }
 ?>