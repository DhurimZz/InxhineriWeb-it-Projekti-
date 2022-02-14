<?php
include_once '../database/databaseConnection.php';


class UserRepository {
    private $connection;

    function __construct() {
        $conn = new DatabaseConnection;
        $this->connection = $conn;
    }

    function insertUser($user) {
        $conn = $this->connection->startConnection();
        $id = $user->getId();
        $name = $user->getName();
        $surname = $user->getSurname();
        $birthyear = $user->getBirthyear();
        $gender = $user->getGender();
        $email = $user->getEmail();
        $password = $user->getPassword();
        $country = $user->getCountry();
        $role = $user->getRole();;

        $sql = "INSERT INTO user VALUES('$id','$name', '$surname',' $birthyear','$gender','$email','$password','$country','$role')";
        if(mysqli_query($conn,$sql)){
            // echo "query is executed succesfuly";
            echo '<script> location.replace("http://localhost/InxhineriWeb-it-Projekti-/view/loginForm.php"); </script>';
        }else {
            echo "This is an Error:".mysqli_error($conn);
        }
    }

}
?>