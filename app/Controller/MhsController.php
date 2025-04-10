<?php

namespace Jopel\Mhs\Controller;

use Jopel\Mhs\App\View;
use Jopel\Mhs\Model\User;

class MhsController
{
    function index(): void 
    {
        if(isset($_SESSION["username"])){

            View::render('dashboard');  
        } else {
            header('Location: /login');
        }
 
    }

    function enroll(): void
    {
        
    }
}


