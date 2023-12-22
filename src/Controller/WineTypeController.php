<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WineTypeController extends AbstractController
{
    #[Route('/vins/types-vins', name: 'app_wine_type')]
    public function index(): Response
    {
        return $this->render('wine_type/index.html.twig', [
            'controller_name' => 'WineTypeController',
        ]);
    }
}
