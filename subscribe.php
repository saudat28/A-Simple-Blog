<?php 
include('connect.php');
if(isset($_POST['submit'])){
    $email= $_POST['email'];
    $sql="INSERT INTO `subscribe`(`sub_id`, `email`, `date`) VALUES (null,'$email',default)";
    $result = mysqli_query($conn,$sql);
        if($result){
           header('location:thankyou.html');
           
        }else{
            die(mysqli_error($conn));
        }

    }
    
?> 
