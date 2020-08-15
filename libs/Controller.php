<?php

namespace libs;

use libs\View;
use libs\Model;

class Controller
{
    public function __construct()
    {
        echo "<p>Controlador Base</p>";
        // $this->loadModel();
        $this->view = new View;
    }

    public function loadModel($model)
    {
        if (file_exists("app/" . $model . ".php")) {
            $this->model = new Model;
        }
    }

    public function loadVista()
    {
    }
}
