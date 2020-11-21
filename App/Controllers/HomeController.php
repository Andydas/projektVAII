<?php

namespace App\Controllers;

use App\Core\AControllerBase;

class HomeController extends AControllerBase
{

    public function index()
    {

    }

    public function zmena()
    {
        return ["typ" => $_GET["typ"], "nazov" => $_GET["nazov"] ];
    }
}