<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Evenement;
use App\Repository\EvenementRepository;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      // $evenements = $response->findAll();
      //  'evenements'=>$evenements
        $builder
            ->add('event', ChoiceType::class, [
              'choices' => [
                'maybe'=> "1",
                'soiree'=> "st val",
                'amour'=> "amour",
              ],
            ])
            ->add('personnes', ChoiceType::class, [
              'choices' => [
                '1'=> "1",
                '2'=> "2",
                '3'=> "3",
                '4'=> "4",
                '5'=> "5",
                '10+'=> "10",
                '20+'=> "20",
              ],
            ])
            ->add('nom')
            ->add('prenom')
            ->add('email', EmailType::class)
            ->add('message', TextareaType::class)
            ->add('envoyer', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
