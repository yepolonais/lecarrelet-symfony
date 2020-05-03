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
        $cocktail = $response->findBy(array("categorie" => "cocktails"));
        $biere = $response->findBy(array("categorie" => "bieres"));
        $vin = $response->findBy(array("categorie" => "vins"));
        $shooter = $response->findBy(array("categorie" => "shooters"));
        $tapa = $response->findBy(array("categorie" => "tapas"));
        $bocalPlat = $response->findBy(array("souscategorie" => "plats"));
        $bocalFormule = $response->findBy(array("souscategorie" => "Formule"));
        return $this->render('carte/carte.html.twig', [
            'cokctails' => $cocktail,
            'bieres' => $biere,
            'vins' => $vin,
            'shooters' => $shooter,
            'tapas' => $tapa,
            'plats' => $bocalPlat,
            'Formule' => $bocalFormule
        ]);
    }

}
