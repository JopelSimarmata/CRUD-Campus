<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use Jopel\Mhs\App\Router;
use Jopel\Mhs\Controller\AuthController;
use Jopel\Mhs\Controller\MhsController;

Router::add('GET','/login', AuthController::class, 'index' );
Router::add('POST','/login', AuthController::class, 'login' );
Router::add('GET','/dashboard', MhsController::class, 'index' );

Router::add('GET','/create', MhsController::class, 'enroll');
Router::run();



