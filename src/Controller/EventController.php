<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Evenement;
use App\Repository\EvenementRepository;

class EventController extends AbstractController
{
    /**
     * @Route("/event", name="event")
     */

    public function index(EvenementRepository $response)
    {
        $evenements = $response->findBy(array(), array('debut' => 'ASC'));
            return $this->render('event/event.html.twig', [
            'evenements' => $evenements,
            'controller_name' => 'EventController',
        ]);
    }

}
