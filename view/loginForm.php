<?php
    
    session_start();
    if(isset($_SESSION['email'])){
        echo '<script> location.replace("http://localhost/InxhineriWeb-it-Projekti-/view/home.php"); </script>';
    
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="./public/css/loginForm.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

</head>
<?php 

    include_once '../models/CheckFields.php';
    $emailPasswordError='';

    $chF = new CheckFields;
    
    if(isset($_POST['loginbtn'])) {
        if(empty($_POST['email']) || empty($_POST['password'])){
            echo "";
        }else{
            $email = $_POST['email'];
            $password = $_POST['password'];
            if($chF->check_email($email) && $chF->check_password($password) && $chF->get_role($email) === 'user'){ 
                $_SESSION['email'] = $email; 
                $_SESSION['user'] = 'user';
                echo '<script> location.replace("http://localhost/InxhineriWeb-it-Projekti-/view/home.php"); </script>';
            }else if($chF->check_email($email) && $chF->check_password($password) && $chF->get_role($email) === 'admin'){
                $_SESSION['email'] = $email; 
                $_SESSION['admin'] = 'admin';
                echo '<script> location.replace("http://localhost/InxhineriWeb-it-Projekti-/view/admin/posts.php"); </script>';

            }
            else{
                $emailPasswordError='Email ose fjalkalimi jan gabim!!';
                
            }
        }
    }

?>

<body>

    <div class="container">
        <div class="container-loginform" id="login-form">
            <form class="container-loginform-items" action="loginForm.php" method="post">
                <span class="loginform-title">KY??U</span>
                <span class="loginform-emailpassword">EMAIL</span>
                <input type="text" class="loginform-input" id="input-email" name="email">
                <span id="emailError" class="error"><?php echo $emailPasswordError;?></span>
                <span class="loginform-emailpassword">FJALKALIMI</span>
                <input type="password" class="loginform-input" id="input-password" name="password">
                <span id="passwordError" class="error"><?php echo $emailPasswordError;?></span>
                <div class="loginform-checkbox">
                    <label> <input type="checkbox"> Remember me</label>
                    <span>Forgot Password?</span>
                </div>
                <div class="container-loginform-button">
                    <input type="submit" class="loginform-button" name="loginbtn" value="Ky??u">
                </div>
            </form>
        </div>
    </div>

    <script src="./public/js/loginForm.js"></script>
</body>

</html>