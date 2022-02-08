<?php 
    include_once '../repository/userRepository.php';
    include_once '../models/user.php';

    $name = "";
    $surname = "";
    $birthyear = "";
    $gender = "";
    $email = "";
    $password = "";
    $country = "";

    if(isset($_POST['register'])) {
        if(empty($_POST['name'])  empty($_POST['surname']) empty($_POST['birthyear'])  empty($_POST['gender']) 
        empty($_POST['email'])  empty($_POST['password'])empty($_POST['country'])){

            echo "Fill all required";
        }else {
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $birthyear = $_POST['birthyear'];
            $gender = $_POST['gender'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $country = $_POST['country'];
            $id= rand(100, 999).$username;

            $user = new User($id, $name, $surname, $birthyear, $gender,$email, $password,$country);

            $userRepository= new UserRepository;
            $userRepository->insertUser($user);
        }


    }