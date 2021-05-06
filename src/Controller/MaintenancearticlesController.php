<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArticlesRepository;


class MaintenancearticlesController extends AbstractController
{
    /**
     * @Route("/maintenancearticles_index", name="maintenancearticles")
     */
    public function index(ArticlesRepository $articlesRepository): Response
    {
        return $this->render('maintenancearticles/index.html.twig', [
            'controller_name' => 'MaintenancearticlesController',
            'articles' => $articlesRepository->findAll(),
            
        ]);
    }
}