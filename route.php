<?php

class Route
{
    private $controller = 'IndexController';
    private $method = 'index';

    public function __construct()
    {
        $url = $this->getUrl();
        if (!empty($url[0])) {
            $this->controller = ucfirst($url[0]) . 'Controller';
            if (!empty($url[1])) {
                $this->method = $url[1];
            }
        }
        $dir = 'controllers/';
        require $dir . $this->controller . '.php';
        $this->controller = new $this->controller;
        call_user_func([$this->controller, $this->method]);
    }

    public function getUrl()
    {
        $url = $_SERVER['REQUEST_URI'];
        $url = explode('/', $url);
        unset($url[0]);
        unset($url[1]);
        unset($url[2]);
        $url = array_values($url);
        return $url;
    }
}