<?php

namespace Jopel\Mhs\Controller;

use Jopel\Mhs\App\View;

class MhsController
{
    function index(): void 
    {
        View::render('dashboard');
    }

    function enroll(): void
    {
        
    }
}


