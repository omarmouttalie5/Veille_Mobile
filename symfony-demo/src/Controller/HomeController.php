<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/hello/{name}', name: 'app_hello', methods: ['GET'])]
    public function index(string $name): Response
    {
        return new Response(
            "<html><body><h1>Hello, " . htmlspecialchars($name) . "!</h1><p>Welcome to your Symfony tech watch demo.</p></body></html>"
        );
    }

    #[Route('/api/status', name: 'api_status', methods: ['GET'])]
    public function status(): JsonResponse
    {
        return $this->json([
            'status' => 'success',
            'framework' => 'Symfony',
            'message' => 'API endpoint operating normally.'
        ]);
    }
}