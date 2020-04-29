<?php

namespace App\Controller;

use App\Form\ContactType;
use App\Form\RappelType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Evenement;
use App\Repository\EvenementRepository;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request, \Swift_Mailer $mailer , EvenementRepository $response)
    {
      $form = $this->createForm(ContactType::class);
      $form->handleRequest($request);
      if($form->isSubmitted() && $form->isValid())
      {
        $contact = $form->getData();

        //ici nous enverrons le mail
        $message = (new \Swift_Message('Nouveau Contact'))
              //on attribue l'expéditeur
              ->setFrom($contact['email'])
              //on attribue le destinataire
              ->setTo('contact@lecarrelet.jp')
              //on enregistre la date de création du mail
              // ->setCreatedAt(new \DateTime())
              //on crée le message avec la vue twig
              ->setBody(
                $this->renderView(
                'emails/email.html.twig', compact('contact')
              ),
              'text/html'
            )
          ;
          //on envoie le Message
          $mailer->send($message);
          $this->addFlash('message', 'Votre demande a bien été envoyée');
          // return $this->redirectToRoute('contact');
      }
      $rappel = $this->createForm(RappelType::class);
      $rappel->handleRequest($request);
      if($rappel->isSubmitted() && $rappel->isValid())
      {
        $contactRappel = $rappel->getData();

        //ici nous enverrons le mail
        $message = (new \Swift_Message('Nouveau Contact'))
              //on attribue l'expéditeur
              ->setFrom('default@email.com')
              //on attribue le destinataire
              ->setTo('contact@lecarrelet.jp')
              //on enregistre la date de création du mail
              // ->setCreatedAt(new \DateTime())
              //on crée le message avec la vue twig
              ->setBody(
                $this->renderView(
                'emails/rappel.html.twig', compact('rappel')
              ),
              'text/html'
            )
          ;
          //on envoie le Message
          $mailer->send($message);
          $this->addFlash('message', 'Votre demande a bien été envoyée');
          // return $this->redirectToRoute('contact');
      }
      $evenements = $response->findAll();
        return $this->render('contact/contact.html.twig', [
            'evenements'=>$evenements,
            'contactForm' => $form->createView(),
            'rappelForm' => $rappel->createView(),
        ]);
    }
}
