<?php 
    include_once '../repository/contactRepository.php';
    include_once '../models/Contact.php';

    $name = "";
    $email = "";
    $message = "";

    if(isset($_POST['contactbtn'])){
        if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])){
            echo "Fill all required";
        }else {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            
            $contact = new Contact( $name, $email,$message);

            $contactRepository= new contactRepository();
            $contactRepository->insertContact($contact);
            
        }
        

    }
?>