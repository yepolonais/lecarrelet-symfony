<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
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
            ->add('event', ChoiceType::class
             , [
               'choices' => [
                 'type d\'évènement'=> "soiree",
                 'mixologie'=> "Mixologie",
                'evjf'=> "EVJF",
                'EVG'=> "EVG",
                 ]
               ]
            )
            ->add('personnes', ChoiceType::class
            , [
              'choices' => [
                'nombre de personne'=> "",
                '1'=> "1",
                '2'=> "2",
                '3'=> "3",
                '4'=> "4",
                '5'=> "5",
                '10+'=> "10",
                '20+'=> "20",
              ],
              'attr'=>[
                'class'=> 'form-control'
              ]
            ]
            )
            ->add('nom', TextType::class
            , [
            'attr'=>[
                    'placeholder'=>"Nom",
                    'class'=>'form-control'
                  ]
            ]
            )
            ->add('prenom', TextType::class
            ,[
            'attr'=>[
                    'placeholder'=>"Prénom",
                    'class'=>'form-control'
                  ]
            ]
            )
            ->add('email', EmailType::class
            ,[
            'attr'=>[
                    'placeholder'=>"Email",
                    'class'=>'form-control'
                  ]
            ]
            )
            ->add('message', TextareaType::class
            ,[
            'attr'=>[
                    'placeholder'=>"Votre message",
                    'class'=>'form-control'
                  ]
            ]
            )
            ->add('envoyer', SubmitType::class
            // ,[
            //   'label' => 'Envoyer'
            // ]
            ,[
              'attr'=>[
                'class' => 'btn-lg',
              ]
            ]
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
