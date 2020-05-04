<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Horaire;
use App\Repository\HoraireRepository;

class IndexController extends AbstractController
{
  /**
   * @Route("/", name="index")
   */
    public function index(HoraireRepository $response)
    {
        $aujourdhui = Date('D');
       if($aujourdhui == "Sun")
        {
            $horaire = $response->findBy(array("jour" => "dimanche"));
        }
        if($aujourdhui == "Mon")
        {
            $horaire = $response->findBy(array("jour" => "lundi"));
        }
        if($aujourdhui == "The")
        {
            $horaire = $response->findBy(array("jour" => "mardi"));
        }
        if($aujourdhui == "Wen")
        {
            $horaire = $response->findBy(array("jour" => "mercredi"));
        }
        if($aujourdhui == "Thu")
        {
            $horaire = $response->findBy(array("jour" => "jeudi"));
        }
        if($aujourdhui == "Fri")
        {
            $horaire = $response->findBy(array("jour" => "vendredi"));
        }
        if($aujourdhui == "Sat")
        {
            $horaire = $response->findBy(array("jour" => "samedi"));
        }

        return $this->render('index/index.html.twig', [
        'horaires' => $horaire,
        ]);
    }


}
?>
