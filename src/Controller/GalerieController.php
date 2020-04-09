<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GalerieController extends AbstractController
{
    /**
     * @Route("/galerie", name="galerie")
     */
    public function index()
    {
        return $this->render('galerie/galerie.html.twig', [
            'controller_name' => 'GalerieController',
        ]);
    }
}
