<?php  
    class DatabaseConnection{

        private  $server = "localhost";
        private  $username = "root";
        private  $password = "password";
        private  $database = "inxhineriWeb-it-projekti";

        function startConnection() {
            $conn=  mysqli_connect($this->server, $this->username, $this->password,  $this->database);
            if(!$conn){
                // echo "<b>error</b>";
                return null;
            }else {

                // echo "<b>success</b>";
                return $conn;
            }
        }
    }
    // $db = new DatabaseConnection;
    // $db->startConnection();

?>