<?php 
include ('../connect.php');
session_start();
function cont($conn,$sql){
    $sql = "SELECT * FROM `contact`";
    $result = mysqli_query($conn,$sql);
    $rows = mysqli_num_rows($result);
    echo "". $rows;
}


function contsub($conn,$sql1){
    $sql1 = "SELECT * FROM `subscribe`";
    $result1 = mysqli_query($conn,$sql1);
    $rows1 = mysqli_num_rows($result1);
    echo "". $rows1;
    }
  
?>