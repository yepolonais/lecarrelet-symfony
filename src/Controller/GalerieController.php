<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Galerie;
use App\Repository\GalerieRepository;


class GalerieController extends AbstractController
{
    /**
     * @Route("/galerie", name="galerie")
     */
    public function index(GalerieRepository $response)
    {
        $photos = $response->findAll();
        return $this->render('galerie/galerie.html.twig', [
            'photos' => $photos,
            'controller_name' => 'GalerieController',
        ]);
    }
}
