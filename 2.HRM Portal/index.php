<?php

require('./autoload.php');

use HRM\Controllers\HomeController;

$controller = new HomeController();

if($_SERVER["REQUEST_METHOD"] === "GET"){
    if($_SERVER["REQUEST_URI"] === '/home') {
        $controller->renderHomePage();
    }
    elseif($_SERVER["REQUEST_URI"] === '/contact'){
        $controller->renderContactPage();
    }
}
elseif($_SERVER["REQUEST_METHOD"] === "POST"){
    if($_SERVER["REQUEST_URI"] === '/contact') {
        $controller->saveContact();
    }
}