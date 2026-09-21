<?php
// Include configuration
require_once 'config/database.php';

// Get controller and action from URL
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'student'; // if no controller is specified, default to 'student'
$action = isset($_GET['action']) ? $_GET['action'] : 'list'; // if no action is specified, default to 'list'

require_once "controllers/{$controller}Controller.php"; // e.g., controllers/StudentController.php
require_once "models/" . ucfirst($controller) . ".php"; 

$controllerName = ucfirst($controller) . 'Controller'; // ucfirst() function is used to convert the first character of a string to uppercase; e.g., StudentController
$controllerObj = new $controllerName($database); // used to create an instance of the controller class; e.g., new StudentController($database) creates an instance of the StudentController class of the controller class.
$actionMethod = $action . 'Action'; // e.g., listAction, addAction, editAction, deleteAction, viewAction

$controllerObj->$actionMethod($_GET['id'] ?? null);
