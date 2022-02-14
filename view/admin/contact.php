<?php 
include_once '../../database/databaseConnection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIEW USER</title>
    <link rel="stylesheet" href="../public/css/view.css">
</head>

<body>
    <div class="container">
        <?php include_once "dashboard.php";?>
        <div class="content-center">
            <div class="container-table">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Emri</th>
                            <th scope="col">email</th>
                            <th scope="col">message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                          $dbC = new DatabaseConnection;
                          $conn = $dbC->startConnection();
                          $select_message = "SELECT * FROM contact_us";
                          $result = mysqli_query($conn, $select_message);
                          $count = 1;
                         
                        while( $row = mysqli_fetch_assoc($result)){ ?>
                        <tr>
                            <th scope="row"><?php echo $count;?></th>
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["email"]; ?></td>
                            <td><?php echo $row["message"]; ?></td>
                        </tr> <?php $count++; }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>