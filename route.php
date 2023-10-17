<?php
require_once "controller/GamesController.php";
require_once "controller/CategoryController.php";  // Incluir CategoryController
require_once "model/CategoryModel.php";  // Incluir CategoryModel
require_once "controller/UsersController.php";

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

define('home', "Location: http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . '/home');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$gamesController = new GamesController();
$categoryController = new CategoryController();  
$categoryModel = new CategoryModel();  
$usersController = new UsersController();

$params = explode('/', $action);

switch ($params[0]) {
    case 'home':
        $gamesController->showHome();
        break;
    case 'addGame':
        $gamesController->addGame();
        break;
    case 'deleteGame':
        $gamesController->deleteGame($params[1]);
        break;
    case 'editGame':
        $gamesController->editGame($params[1]);
        break;
    case 'confirmUpdate':
        $gamesController->updateGame();
        break;
    case 'game':
        $gamesController->viewGameController($params[1]);
        break;
    case 'signUp':
        $usersController->viewSignUp();
        break;
    case 'sendSignUp':
        $usersController->createUser();
        break;
    case 'adminPanel':
        $usersController->AdminPanel();
        break;
    case 'promoteUser':
        $usersController->promoteUser($params[1]);
        break;
    case 'demoteUser':
        $usersController->demoteUser($params[1]);
        break;
    case 'deleteUser':
        $usersController->deleteUser($params[1]);
        break;
    case 'login':
        $usersController->verifyLogin();
        break;
    case 'logout':
        $usersController->logout();
        break;

    // Agregar rutas para CategoryController
    case 'showCategories':
        $categoryController->showCategories();
        break;
    case 'addCategory':
        $categoryController->addCategory();
        break;
    case 'deleteCategory':
        $categoryController->deleteCategory($params[1]);
        break;
    case 'editCategory':
        $categoryController->editCategory($params[1]);
        break;
    case 'confirmUpdateCategory':
        $categoryController->updateCategory();
        break;

    default:
        echo('404 Page not found');
        break;
}
