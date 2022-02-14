<?php 
include_once '../database/databaseConnection.php';

class ContactRepository {
    private $connection;

    function __construct() {
        $conn = new DatabaseConnection;
        $this->connection = $conn;
    }

    function insertContact($contact){
        $conn = $this->connection->startConnection();
        $name = $contact->getName();
        $email = $contact->getEmail();
        $Message = $contact->getMessage();

        $sql = "INSERT INTO contact_us VALUES('$name','$email','$Message')";
        if(mysqli_query($conn,$sql)){
            // echo "query is executed succesfuly";
        }else {
            echo "This is an Error:".mysqli_error($conn);
        }
    }

}

?>