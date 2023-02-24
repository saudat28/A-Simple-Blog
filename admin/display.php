<?php 
 include '../connect.php'; 
 include 'delete.php';?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style1.css" rel="stylesheet">
    <title>SauBlogy</title>
  </head>

    <body>
        <div class="row">
        <div class= "col-sm-5 offset-sm-2 col-md-6 offset-md-0 bar">
                    <ul>
                        <li><a href="admin.php">HOME </a></li>
                        <li><a href="subscribers.php">VIEW SUBSCRIBERS  </a></li>
                        <li> <a href="display.php"> VIEW MESSAGES </a></li>
                        <li><a href="../index.php"> VISIT A WEBSITE</a></li>
                        <li><a href="logout.php"> LOGOUT</a></li>
                    </ul>
                </div>

<div class="col-sm-5 col-md-6 bar2">
      <h2> MESSAGES</h2>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Message</th>
                        <th scope="col">Date</th>
                        <th scope="col">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                          $sql = "SELECT * FROM `contact`";
                          $result = mysqli_query($conn,$sql);
                          if ($result){
                            while($row= mysqli_fetch_assoc($result)){
                              $id = $row ['user_id'];
                              $name = $row ['name'];
                              $email = $row ['email'];
                              $message = $row ['message'];
                              $date = $row ['date'];
                              echo '<tr>
                              <th scope="row">'.$id.'</th>
                              <td>'.$name.'</td>
                              <td>'.$email.'</td>
                              <td>'.$message.'</td>
                              <td>'.$date.'</td>
                              <td>
                              <button class= "btn btn-danger"> <a href="delete.php? deleteid='.$id.'" class="text-light text-decoration-none">Delete </a> </button></td>
                              </tr>';
                            }
                          }
                        ?>
                    </tbody>
                </table>
                        </div>
                        </div>
        </div>
    </body>
    </html>