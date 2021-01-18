<?php
   
    $con = mysqli_connect("localhost","ammu","ammu123","loginsystem");
    
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
