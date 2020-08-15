<?php

namespace libs;

use libs\ConexionDB;

class Model
{
    public function __construct()
    {
        $this->db = new Database;
    }
}
