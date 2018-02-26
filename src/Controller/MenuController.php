<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MenuController extends Controller
{
    public function __construct()
    {
    }

    public function menu()
    {
        return $this->render("menu/right.html.twig");
    }
}