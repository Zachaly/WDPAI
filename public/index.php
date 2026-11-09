<?php

declare(strict_types=1);

use App\Controller\DefaultController;
use App\Controller\ForumController;
use App\Controller\ForumPostController;
use App\Controller\GearController;
use App\Controller\ProjectController;
use App\Controller\LeaderboardController;
use App\Controller\LoginController;
use App\Controller\ProfileController;
use App\Controller\RegisterController;
use App\Controller\SubmitGymController;
use App\Routing;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$isHttps = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';
session_set_cookie_params([
    'lifetime' => 0,
    'path' => '/',
    'secure' => $isHttps,
    'httponly' => true,
    'samesite' => 'Lax',
]);
session_start();

$routing = new Routing();

$routing->get('/forum', ForumController::class, 'index');
$routing->get('/forum/new', ForumPostController::class, 'index');
$routing->post('/forum/new', ForumPostController::class, 'store');
$routing->get('/forum/{id}', ForumController::class, 'show');
$routing->get('/profile', ProfileController::class, 'index');
$routing->get('/profile/{id}', ProfileController::class, 'show');
$routing->get('/gear', GearController::class, 'index');
$routing->get('/leaderboard', LeaderboardController::class, 'index');
$routing->get('/login', LoginController::class, 'index');
$routing->post('/login', LoginController::class, 'store');
$routing->post('/logout', LoginController::class, 'logout');
$routing->get('/register', RegisterController::class, 'index');
$routing->post('/register', RegisterController::class, 'store');
$routing->get('/submit-gym', SubmitGymController::class, 'index');
$routing->get('/projects', ProjectController::class, 'index');
$routing->get('/projects/{id}', ProjectController::class, 'show');
$routing->get('/', DefaultController::class, 'index');

$routeFound = $routing->dispatch(
    $_SERVER['REQUEST_METHOD'],
    $_SERVER['REQUEST_URI'],
);

if (!$routeFound) {
    http_response_code(404);
    (new DefaultController())->notFound();
}