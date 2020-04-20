<?php

namespace App\Controller;
use App\Entity\Evenement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
<<<<<<< HEAD
<<<<<<< HEAD
use App\Entity\Evenement;
=======
>>>>>>> update
=======
>>>>>>> 9a58dae86fa3114c66ca6117e6345a87ee25cb6e
use App\Repository\EvenementRepository;

class EventController extends AbstractController
{
    /**
     * @Route("/event", name="event")
     */
<<<<<<< HEAD
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
=======
    public function index(EvenementRepository $response)
    {
        $evenements = $response->findAll();
        return $this->render('event/event.html.twig', [
          'evenements' => $evenements,
>>>>>>> 9a58dae86fa3114c66ca6117e6345a87ee25cb6e
            'controller_name' => 'EventController',
        ]);
    }

}
