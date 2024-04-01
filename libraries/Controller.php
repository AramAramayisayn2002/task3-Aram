<?php

class Controller
{
    protected function viewRender($view, $data = null)
    {
        require('views/layouts/header.php');
        require('views/' . $view . '.php');
        require('views/layouts/footer.php');
    }
}
