<?php

namespace App\Controllers;

use Slim\Views\Twig as View;


class HomeController extends Controller

{
    public function index($request,$response)
    {
        return $this->container->view->render($response,'home.twig');
    }

    public function about($request,$response)
    {
        return $this->container->view->render($response,'about.twig');
    }
}