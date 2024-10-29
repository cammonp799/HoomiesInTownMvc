<?php

require_once '../env.php'; // For environment variables
require_once '../config/db.php'; // For database connection
require_once '../config/routes.php'; // For routes
require_once '../app/models/UserModel.php'; // For user model

// Autoload function for classes
function autoload($class_name)
{
    $controllerPath = "../app/controllers/{$class_name}.php";
    $modelPath = "../app/models/{$class_name}.php";

    if (file_exists($controllerPath)) {
        require_once $controllerPath;
        return;
    }

    if (file_exists($modelPath)) {
        require_once $modelPath;
        return;
    }
}

// Registering the autoloader
spl_autoload_register('autoload');

// Function to create controller instances with required dependencies
function createController($controllerName, $db = null)
{
    switch ($controllerName) {
        case 'ConnectionController':
            $model = new UserModel($db);
            return new $controllerName($model);

        case 'RegisterController':
            $model = new UserModel($db);
            return new $controllerName($model);

        case 'ProfileController':
            $model = new UserModel($db);
            return new $controllerName($model); 

        case 'updateProfileController':
            $model = new UserModel($db);
            return new $controllerName($model); 
        
        case 'SignOutController':
            $model = new UserModel($db);
            return new $controllerName($model); 

        case 'DeleteController':
            $model = new UserModel($db);
            return new $controllerName($model); 

        default:
            // Creating the controller without dependencies
            return new $controllerName();
    }
}

// Parsing the URL to determine which controller and action to invoke
$request = trim($_SERVER['REQUEST_URI'], '/');
$request = parse_url($request, PHP_URL_PATH);
echo $request;
$routeFound = false;

// Create a database connection
$db = getDatabaseConnection();

foreach ($routes as $route => $params) {
    if (preg_match("#^$route$#", $request, $matches)) {
        $controllerName = $params['controller'];
        $action = $params['action'];

        // Create an instance of the controller with necessary dependencies
        $controller = createController($controllerName, $db);

        // Call the controller's action
        call_user_func_array([$controller, $action], array_slice($matches, 1));
        $routeFound = true;
        break;
    }
}

if (!$routeFound) {
    // Display a 404 error if no route matches
    http_response_code(404);
    echo "404 Not Found";
}