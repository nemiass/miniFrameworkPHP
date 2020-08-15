<?php

namespace app\controllers;

use libs\Controller;

class ErrorController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->msg = "ERROR 404 PAGE NOT FOUND";
        $this->view->getView("error/index");
    }
}
