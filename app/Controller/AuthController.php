<?php

namespace Jopel\Mhs\Controller;

use Jopel\Mhs\App\View;

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

        if($username == '123' && $password == '123'){
            header('Location: /dashboard');
        } else {
            header('Location: /login');
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

        

    }

    


}