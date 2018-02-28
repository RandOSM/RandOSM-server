<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use \Twig_Environment;

class InfoController
{

    private $twig;

    public function __construct(Twig_Environment $twig)
    {
        $this->twig = $twig;
    }

    public function osm()
    {
        return new Response($this->twig->render('info/osm.html.twig'));
    }

    public function aboutUs()
    {
        return new Response($this->twig->render('info/about_us.html.twig'));
    }

}