<?php

namespace App\Controller;
use App\Entity\Evenement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
<<<<<<< HEAD
use App\Entity\Evenement;
=======
use App\Entity\Evenement;
=======
>>>>>>> 9a58dae86fa3114c66ca6117e6345a87ee25cb6e
>>>>>>> 1fb247451777bc689c7844855d028420d7c41e77
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
>>>>>>> 1fb247451777bc689c7844855d028420d7c41e77
            'controller_name' => 'EventController',
        ]);
    }

}
