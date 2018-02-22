<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class RootController
{
    private $twig;

    public function __construct(\Twig_Environment $twig)
    {
        $this->twig = $twig;
    }

    public function index()
    {
        return new Response($this->twig->render("root/index.html.twig"));
    }
}