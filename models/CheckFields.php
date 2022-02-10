<?php 
    include_once '../database/databaseConnection.php';
    class CheckFields{

        

        function check_email($email){
            $dbC = new DatabaseConnection;
            $conn = $dbC->startConnection();
            $select_email = "SELECT * FROM user WHERE email = '$email'";
            $result = mysqli_query($conn, $select_email);
            if(mysqli_num_rows($result) > 0){
                echo '';
                return true;
                
            }else{
                
                return false;
            }
        }
        function check_password($password){
            $dbC = new DatabaseConnection;
            $conn = $dbC->startConnection();
            $select_password = "SELECT * FROM user WHERE password = '$password'";
            $result = mysqli_query($conn, $select_password);
            if(mysqli_num_rows($result) > 0){
                echo '';
                return true;
                
            }else{
               
                return false;
            }
        }
    }
?>