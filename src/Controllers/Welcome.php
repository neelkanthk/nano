<?php

namespace Application\Controllers;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use League\Plates\Engine;

class Welcome
{

    public function indexAction(Request $request)
    {

        $views = new Engine(__DIR__ . '/../Views');

        echo $views->render('welcome', ['version' => '1.0.0']);
    }
}
