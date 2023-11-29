<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class PingController extends Controller
{
    /**
     * @Route("/ping", name="ping")
     */
    public function pingAction(): JsonResponse
    {
        return $this->json(["message"=>"pong"]);
    }
}
