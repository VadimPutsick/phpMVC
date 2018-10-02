<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 18.09.2018
 * Time: 15:46
 */
class View
{
    public function __construct()
    {

    }

    public function render($name, $data = false)
    {
        if ($data != false) {
            $this->data = $data;
        }
        require 'views/header.php';
        require 'views/' . $name . '.php';
        require 'views/footer.php';
    }
}