<?php
require 'ControllerActions.php';
function routeRequest()
{
    define("DEFAULT_ACTION", "start");

    $action = isset($_GET['action']) ? $_GET['action'] : DEFAULT_ACTION;
    if (empty($action)) {
        $action = "accueil";
    }
    try {
        if (function_exists($action)) {
            $action();
        } else {
            require ROOT . "/View/ViewError.php";
        }
    } catch (Exception $e) {
        require ROOT . "/View/ViewError.php";
    }
}
