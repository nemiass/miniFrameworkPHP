<?php

namespace app\controllers;

use libs\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->view->getView("user/index");
    }

    public function home()
    {
        $this->view->getView("user/index");
    }
}
