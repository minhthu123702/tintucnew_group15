<?php
require_once './configs/adminDB.php';
$controller = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Admin';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$controllerPath = "./controller/{$controller}Controller.php";
$id = $_GET['id'] ?? null;

if (file_exists($controllerPath)) {
    require_once $controllerPath;  
    $controllerClass = $controller . 'Controller';  
    $controllerObject = new $controllerClass(); 
    if (method_exists($controllerObject, $action)) {
       $reflection = new ReflectionMethod($controllerObject, $action);
       if ($reflection->getNumberOfParameters() > 0) {
           $controllerObject->$action($id);
       } else {
           $controllerObject->$action();
       }
    } else {
        echo "404 Not Found: The action does not exist";
    }
} else {
    // Controller does not exist
    echo "404 Not Found: The controller does not exist";
}
?>