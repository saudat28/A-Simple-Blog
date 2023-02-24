<?php 
include('connect.php');
if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $message= $_POST['message'];
    $sql="INSERT INTO `contact`(`user_id`, `name`, `email`, `message`, `date`) VALUES (null,'$name','$email','$message',default);";
 
    $result = mysqli_query($conn,$sql);
        if($result){
            echo '<script>alert("Message sent successful")</script>';
            header('location:contact.php');
        
        }else{
            die(mysqli_error($conn));
        }

    }
?> 
