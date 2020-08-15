<?php

namespace app\controllers;

use libs\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->view->getView("Admin/index");
    }

    public function home()
    {
        $this->view->getView("Admin/index");
    }

    public function saludar()
    {
        echo "Saludando desde admin";
    }
}
