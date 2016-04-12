<?php
use Itb\MainController;

use Itb\Member;
use Itb\Login;
use Itb\User;





// do out basic setup
// ------------
require_once __DIR__ . '/../app/configDatabase.php';
require_once __DIR__ . '/../app/setup.php';


//$members = Member::getAll();
//var_dump($members);

// use our static controller() method...
$app->get('/',      \Itb\Utility::controller('Itb', 'main/index'));
$app->get('/index',      \Itb\Utility::controller('Itb', 'main/index'));
$app->get('/members', \Itb\Utility::controller('Itb', 'main/members'));
$app->get('/days', \Itb\Utility::controller('Itb', 'main/days'));
$app->post('/login', \Itb\Utility::controller('Itb', 'main/login'));
$app->get('/admin', \Itb\Utility::controller('Itb', 'main/adminPage'));
$app->get('/logout', \Itb\Utility::controller('Itb', 'main/logout'));
$app->get('/user', \Itb\Utility::controller('Itb', 'main/user'));
$app->get('/student', \Itb\Utility::controller('Itb', 'main/studentPage'));
$app->get('/detail/{id}', \Itb\Utility::controller('Itb', 'main/detail'));


/*echo 'just test';
$user = Login::getOneById(1);
var_dump($user );*/


// 404 - Page not found
$app->error(function (\Exception $e, $code) use ($app) {
    switch ($code) {
        case 404:
            $message = 'The requested page could not be found.';
            return \Itb\MainController::error404($app, $message);

        default:
            $message = 'We are sorry, but something went terribly wrong.';
            return \Itb\MainController::error404($app, $message);
    }
});

// run Silex front controller
// ------------
$app->run();