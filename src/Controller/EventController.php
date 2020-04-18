<?php

namespace App\Controller;
use App\Entity\Evenement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
<<<<<<< HEAD
use App\Entity\Evenement;
=======
>>>>>>> update
use App\Repository\EvenementRepository;

class EventController extends AbstractController
{
    /**
     * @Route("/event", name="event")
     */
<<<<<<< HEAD

    public function index(EvenementRepository $response)
    {
        $evenements = $response->findBy(array(), array('debut' => 'ASC'));
            return $this->render('event/event.html.twig', [
            'evenements' => $evenements,
=======
    public function index(EvenementRepository $response)
    {
        $evenements = $response->findAll();
        return $this->render('event/event.html.twig', [
          'evenements' => $evenements,
>>>>>>> update
            'controller_name' => 'EventController',
        ]);
    }

}
