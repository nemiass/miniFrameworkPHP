<?php

namespace libs;

class View
{
    public function __construct()
    {
        echo "<p>Vista base</p>";
    }
    public function getView($view, $params = [])
    {
        require_once "view/" . $view . ".php";
    }
}
