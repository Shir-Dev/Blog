<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{

    /**
     * @Route("/user/{name}/{action}")
     */
    public function index($action, $name)
    {
        $respuesta = new Response("HOLA!! $name  $action");

        return $respuesta;
    }

}