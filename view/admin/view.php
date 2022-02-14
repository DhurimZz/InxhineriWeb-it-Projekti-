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
                            <th scope="col">Mbiemri</th>
                            <th scope="col">Ditelindja</th>
                            <th scope="col">Gjinia</th>
                            <th scope="col">Email</th>
                            <th scope="col">Fjalkalimi</th>
                            <th scope="col">Shtetesia</th>
                            <th scope="col">Roli</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                          $dbC = new DatabaseConnection;
                          $conn = $dbC->startConnection();
                          $select_user = "SELECT * FROM user ORDER BY name asc; ";
                          $result = mysqli_query($conn, $select_user);
                         
                        while( $row = mysqli_fetch_assoc($result)){ ?>
                        <tr>
                            <th scope="row"><?php echo $row["id"]; ?></th>
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["surname"]; ?></td>
                            <td><?php echo $row["birthyear"]; ?></td>
                            <td><?php echo $row["gender"]; ?></td>
                            <td><?php echo $row["email"]; ?></td>
                            <td><?php echo $row["password"]; ?></td>
                            <td><?php echo $row["country"]; ?></td>
                            <td><?php echo $row["role"]; ?></td>
                            <td><input type="submit" name="editbtn" value="Edit" class="edit-post button"></td>
                            <td><input type="submit" name="deletebtn" value="Delete" class="delete-post button"></td>
                        </tr> <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>