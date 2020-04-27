<?php

namespace App\Controller;

use App\Repository\CarteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarteController extends AbstractController
{
    /**
     * @Route("/carte", name="carte")
     * @param CarteRepository $carte
     * @return Response
     */
    public function index(CarteRepository $response)
    {
        $carte = $response->findAll();
        return $this->render('carte/carte.html.twig', [
            'carte' => $carte,
        ]);
    }
}
