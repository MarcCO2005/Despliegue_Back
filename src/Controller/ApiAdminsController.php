<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ApiAdminsController extends AbstractController
{
    #[Route('/api/admins', name: 'app_api_admins')]
    public function index(): Response
    {
        return $this->render('api_admins/index.html.twig', [
            'controller_name' => 'ApiAdminsController',
        ]);
    }
}
