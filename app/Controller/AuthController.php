<?php
namespace Jopel\Mhs\Controller;

use Exception;
use Jopel\Mhs\App\FlashMassage;
use Jopel\Mhs\App\View;
use Jopel\Mhs\Model\User;

class AuthController
{
    function index(): void
    {
        View::render('auth/login');
    }

    function login(): void
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $model = new User();
        $result = $model->authUser($username, $password);
        if(!empty($result)){
            FlashMassage::setFlashMessage("success", "Login berhasil");
            $_SESSION["username"] = $username;
            header('Location: /dashboard');
            exit;
        } else {
            FlashMassage::setFlashMessage("gagal", "Username atau Pssword salah");
            header('Location: /login');
            exit;
        }

    }

    function render_signup(): void
    {
        View::render("auth/register");
    }

    function signup(): void
    {

        $data = [
            'username' => $_POST['nama'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'confirm_password' => $_POST['retype_password']
        ];

        if(empty(trim($data["username"])) || empty(trim($data["email"])) || empty(trim($data["password"])) || empty(trim($data["confirm_password"]))){
            FlashMassage::setFlashMessage("error" , "Form tidak boleh kosong");
            header("Location: /register");
            exit;
        }

        if($data['password'] != $data["confirm_password"]){
            FlashMassage::setFlashMessage("error" , "Konfirmasi password harus sama dengan password");
            header("Location: /register");
            exit;
        }

        $model = new User();
        try {
            $model->createUser($data);
            FlashMassage::setFlashMessage("succes", "Registrasi Berhasil");
            header("Location: /login");
            exit;
        } catch (Exception $exception) {
            FlashMassage::setFlashMessage("errors", $exception->getMessage());
            header("Location: /register");
        }


    }

    function logout(){
        unset($_SESSION['username']);
        session_destroy();
        header('Location: /login');
    } 

    


}