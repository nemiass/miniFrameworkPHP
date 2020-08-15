<?php

namespace libs;

use app\controllers;

class App
{
    protected $controller_now = "Home";
    protected $method_now = "Home";
    protected $params;

    public function __construct()
    {
        $url = $this->getUrl();

        $controller_name = ucwords(array_shift($url));

        if (file_exists("app/controllers/" . $controller_name . "Controller.php")) {
            $this->controller_now = $controller_name;
        } else {
            $controller = "app\\controllers\\ErrorController";
            new $controller;
            return;
        }

        //include_once  "app/controllers/".$this->controller_now."Controller.php";-->con includes
        $controller = "app\\controllers\\" . $this->controller_now . "Controller";

        $this->controller_now = new $controller;

        if (count($url)) {
            if (method_exists($this->controller_now, $url[0])) {
                $this->method_now =  strtolower(array_shift($url));
            }
        }
        $this->params = $url;
        $this->controller_now->{$this->method_now}($this->params);
    }

    public function getUrl()
    {
        $url = !empty($_GET["url"]) ? $_GET["url"] : "Home";
        $url = rtrim($url, "/");
        $url = explode("/", $url);
        return $url;
    }
}
