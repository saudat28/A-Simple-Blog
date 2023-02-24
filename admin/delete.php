
<?php 
    include  '../connect.php';
    if (isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];
        $sql= "DELETE FROM `contact` WHERE user_id=$id";
        $result=mysqli_query($conn,$sql);
        if ($result){
            //echo "deleted succesful";
            header('location:display.php');
        }else {
            die(mysqli_error($conn));
        }
    }
    if (isset($_GET['deleteid1'])){
        $id=$_GET['deleteid1'];
        $sql= "DELETE FROM `subscribe` WHERE sub_id=$id";
        $result=mysqli_query($conn,$sql);
        if ($result){
            //echo "deleted succesful";
            header('location:subscribers.php');
        }else {
            die(mysqli_error($conn));
        }
    }
?>