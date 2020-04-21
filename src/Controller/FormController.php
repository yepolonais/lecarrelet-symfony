<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Evenement;
use App\Repository\EvenementRepository;

class FormController extends AbstractController
{
    /**
     * @Route("/form", name="form")
     */
    public function index(EvenementRepository $response)
    {
      $evenements = $response->findAll();
        return $this->render('form/form.html.twig', [
          'evenements' => $evenements,
            'controller_name' => 'FormController',
        ]);
    }
}
