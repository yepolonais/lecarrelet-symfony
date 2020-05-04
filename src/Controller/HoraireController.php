<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Horaire;
use App\Repository\HoraireRepository;

class HoraireController extends AbstractController
{
    /**
     * @Route("/horaire", name="horaire")
     */
    public function index(HoraireRepository $response)
    {
        $lundi = $response->findBy(array("jour" => "lundi"));
        $mardi = $response->findBy(array("jour" => "mardi"));
        $mercredi = $response->findBy(array("jour" => "mercredi"));
        $jeudi = $response->findBy(array("jour" => "jeudi"));
        $vendredi = $response->findBy(array("jour" => "vendredi"));
        $samedi = $response->findBy(array("jour" => "samedi"));
        $dimanche = $response->findBy(array("jour" => "dimanche"));
            return $this->render('horaire/horaire.html.twig', [
            'lundis' => $lundi,
            'mardis' => $mardi,
            'mercredis' => $mercredi,
            'jeudis' => $jeudi,
            'vendredis' => $vendredi,
            'samedis' => $samedi,
            'dimanches' => $dimanche,
            'controller_name' => 'HoraireController',
        ]);
    }
}
