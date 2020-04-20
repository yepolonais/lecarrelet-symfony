<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CarteController extends AbstractController
{
    /**
     * @Route("/carte", name="carte")
     */
    public function index()
    {
        return $this->render('carte/carte.html.twig', [
            'controller_name' => 'CarteController',
        ]);
    }
}
