<?php 

namespace HRM\Controllers;

use HRM\Models\Home;

class HomeController {

    private $model;

    function __construct()
    {
        //echo "This is from constructor";
        $this->model = new Home();
    }

    function renderHomePage(){
        require('./views/home.php');
    }

    function renderContactPage(){

        $contact_list = $this->model->getContact();
        require('./views/contact.php');
    }

    function saveContact(){
        $name = $_POST['name'];
        $this->model->saveContact($name);
        
        $contact_list = $this->model->getContact();
        require('./views/contact.php');
    }
}