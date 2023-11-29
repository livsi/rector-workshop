<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class PingController extends Controller
{
    const RETURN_MESSAGE="You number %s";
    /**
     * @Route("/ping", name="ping")
     */
    public function pingAction(): JsonResponse
    {
        return $this->json(["message"=>"pong"]);
    }

    /**
     * @Route("/return", name="return", requirements="\d+")
     */
    public function returnAction($number): JsonResponse
    {
        return $this->json(["message"=>sprintf(self::RETURN_MESSAGE, $number)]);
    }

    private function dead()
    {
        return "Function dead";
    }
}
