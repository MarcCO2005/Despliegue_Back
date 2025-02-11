<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ApiSociosController extends AbstractController
{
    #[Route('/api/socios', name: 'app_api_socios')]
    public function index(): Response
    {
        return $this->render('api_socios/index.html.twig', [
            'controller_name' => 'ApiSociosController',
        ]);
    }
}
