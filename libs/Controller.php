<?php

class Controller
{
    public $model;
    function __construct()
    {
//    echo "Main controller";
        $this->view = new View();
    }

    public function loadModel($name)
    {
        $path = 'models/' . $name . '_model.php';
        if (file_exists($path)) {
            require 'models/' . $name . '_model.php';
            $modelName = $name . '_Model';
            $this->model = new $modelName();
        }
    }


}