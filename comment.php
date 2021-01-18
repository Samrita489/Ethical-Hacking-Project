<?php

include("auth_session.php");
include("db.php");
$name =$_SESSION['name'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Post</title>
    
 
  
<link rel="stylesheet" href="style.css" />
<body>
    
   </head>
    <div class ="msgbox">
    <form method="post">
            <textarea rows="8" cols="50" name="status" placeholder="comments"></textarea>
            <input type="submit" name="submit" value="submit">
            
    </form>
  </div>
  <?php
          if (isset($_POST['submit']))
          {
             $tweet=$_POST['status'];
             if ($msgs != "NULL") {
              $sql="insert into tweets(name,tweet)values('$name','$tweet')";
              $q=mysqli_query($con,$sql);
              }}
              
   ?>
   <div class = "status">
          <?php
          $command = "SELECT * FROM tweets WHERE name = '$name'" ;
          $result = $con->query($command);
          
    if (mysqli_num_rows($result) > 0) {
    $i=0;
    while($row = mysqli_fetch_array($result)) {
    
    ?>
    <div class= "area">
     <?php
     
     $name=$row['name'];
     $tweet=$row['tweet'];
     echo ''.$name.'';
     
     echo ''.$tweet.'';
     
     ?>
     <?php
     $i++;
     }
     }
     ?></div>
        </div>                           
</body>
</html>
