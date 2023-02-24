<?php
    $conn = new mysqli('localhost', 'root','','Sau_blog');
    if ($conn){
 //echo"connected";
    } else {
        die(mysqli_error($conn));
    }
?>