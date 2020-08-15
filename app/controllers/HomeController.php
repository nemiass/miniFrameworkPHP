<?php

namespace app\controllers;

use libs\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->getView("home");
    }

    public function home()
    {
        $this->view->getView("home");
    }

    public function datos($params)
    {
        print_r($params);
    }
}
