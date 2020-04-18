<?php

namespace App\Controller;
use App\Entity\Evenement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\EvenementRepository;

class EventController extends AbstractController
{
    /**
     * @Route("/event", name="event")
     */
    public function index(EvenementRepository $response)
    {
        $evenements = $response->findAll();
        return $this->render('event/event.html.twig', [
          'evenements' => $evenements,
            'controller_name' => 'EventController',
        ]);
    }
}
