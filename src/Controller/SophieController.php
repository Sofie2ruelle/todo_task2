<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SophieController extends AbstractController
{
    #[Route('/', name: 'app_sophie')]
    public function index(): Response
    {
        return $this->render('sophie/index.html.twig', [
            'controller_name' => 'SophieController',
        ]);
    }
}
