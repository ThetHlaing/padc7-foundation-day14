<?php

namespace HRM\Models;


class Home
{
    function __construct()
    { 
        //echo "This is from home model";
    }

    function getContact()
    {
        return ["Someone", "Anyone", "Everyone"];
    }

    function saveContact($name){
        echo $name. ' will be saved';
    }
}
