<?php

require_once '../models/Admin.php';

if(isset($_POST['submit']))
{
    $loginController = new LoginController();
    $loginController->getUserInput();
}

class LoginController
{
    public function getUserInput()
    {
        $useremail=$_POST['useremail'];
        $password=$_POST['password'];
        $this->checkLogin($useremail,$password);
    }

    public function checkLogin($useremail,$password)
    {
            if($useremail == null || $password == null)
            {
                echo "
                <script>
                        alert('Please Enter Useremail And Password');
                        window.location.href='../views/Login.php';
                </script>";
            }
            $admin = new Admin();
            $user = $admin->canLogin($useremail,$password);

            if($user)
            {
                session_start();
                $_SESSION['useremail']=$user['useremail'];
                echo "
                <script>
                        alert('Login Success');
                        window.location.href='../views/Home.php';
                </script>";
            }
            else
            {
                echo "
                <script>
                        alert('Incorrect Username Or Password');
                        window.location.href='../views/Login.php';
                </script>";
            }

    }
}