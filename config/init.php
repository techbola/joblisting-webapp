<?php
// Start sessio
session_start();

//Config file
require_once 'config.php';

//helper method file
require_once 'helpers/system_helpers.php';

//Autoloader - When a class is instantiated it autoloads the class file
spl_autoload_register(function($className) {
    include 'lib/' . $className . '.php';
});