<?php 
    include_once '../repository/userRepository.php';
    include_once '../models/User.php';

    $name = "";
    $surname = "";
    $birthyear = "";
    $gender = "";
    $email = "";
    $password = "";
    $country = "";
    
   
    if(isset($_POST['registerForm'])){
        if(empty($_POST['name']) || empty($_POST['surename']) || empty($_POST['birthyear']) 
        || empty($_POST['gjinia']) ||  empty($_POST['email']) || empty($_POST['password']) || empty($_POST['country'])){
            echo "Fill all required";
        }else {
            $name = $_POST['name'];
            $surname = $_POST['surename'];
            $birthyear = $_POST['birthyear'];
            $gender = $_POST['gjinia'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $country = $_POST['country'];
            $id = rand(100, 999).$name;
            $role = "user"; 

            $user = new User($id, $name, $surname, $birthyear, $gender,$email, $password,$country,$role);

            $userRepository= new UserRepository();
            $userRepository->insertUser($user);
            
        }
        

    }
    ?>