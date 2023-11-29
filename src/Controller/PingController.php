<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PingController extends Controller
{
    /**
     * @Route("/ping", name="ping")
     */
    public function index(): JsonResponse
    {
        return $this->json(["message"=>"pong"]);
    }
}
