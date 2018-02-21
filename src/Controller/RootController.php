<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class RootController
{
    public function index(){
        return new Response("hello world");
    }
}