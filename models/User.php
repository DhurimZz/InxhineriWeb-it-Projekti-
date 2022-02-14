<?php 
    class User {
        private $id="";
        private $name='';
        private $surname = '';
        private $birthyear = '';
        private $gender = '';
        private $email = '';
        private $password = '';
        private $country = '';
        private $role = '';
        
        function __construct($id, $name, $surname, $birthyear, $gender, $email,$password,$country,$role) {
            $this->id = $id;
            $this->name = $name;
            $this->surname = $surname;
            $this->birthyear = $birthyear;
            $this->gender = $gender;
            $this->email = $email;
            $this->password = $password;
            $this->country = $country;
            $this->role = $role;
        }
        function getId(){
            return $this->id;
        }
        function getName(){
            return $this->name;
        }
        function getSurname(){
            return $this->surname;
        }
        function getBirthyear(){
            return $this->birthyear;
        }
        function getGender(){
            return $this->gender;
        }
        function getEmail(){
            return $this->email;
        }
        function getPassword(){
            return $this->password;
        }
        function getCountry(){
            return $this->country;
        }
        function getRole(){
            return $this->role;
        }
    }
?>