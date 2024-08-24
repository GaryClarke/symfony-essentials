<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController
{
    #[Route('/', name: 'home', methods: ['GET', 'POST'])]
    public function index(Request $request): Response
    {
//        dd($request->toArray());

        $response = new Response();
        $response->headers->set('Content-Type', 'text/html');
        $response->setContent('<h1>Hello World</h1><p>Gary Clarke</p>');
        return $response;
    }
}
