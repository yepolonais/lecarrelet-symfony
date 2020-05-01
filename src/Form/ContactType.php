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
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use App\Entity\Evenement;
use App\Repository\EvenementRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        // $evenements = $response->findBy(array("titre" == "mixologie"));
      //  'evenements'=>$evenements
      $evenementsPerso = ["a","b","c",10,25,32];
        $builder
            ->add('event', EntityType::class, [
              'class' => 'App\Entity\Evenement',
              'placeholder' => 'Type d\'évènement',
              'mapped' => false,
            ]
            // ChoiceType::class
             //, [
               //'choices' =>
               // [
               //  'type d\'évènement'=> "soiree",
               //  'mixologie'=> "Mixologie",
               //  'evjf'=> "EVJF",
               //  'EVG'=> "EVG",
               //   ]
               //]
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
        $builder->addEventListener(FormEvents::POST_SET_DATA, function (FormEvent $event) {
          $evenements = $event->getData();
          if($evenements){
            $formOptions = $event->getForm();
            $formOptions->add('evenements', EntityType::class,[
              'class' => 'App\Entity\Evenement',
              'placeholder' => 'type evenement',
              'choices' => $formOptions->getData()->getTitre(),
              ]
            );
          }
    // ... add a choice list of friends of the current application user

        });
          // [
                   // 'class' => Evenement::class,
                   // 'choice_label' => 'type evenement',
                   // 'query_builder' => function (EvenementRepository $evenementRepository) use ($evenements) {
                   //     // call a method on your repository that returns the query builder
                   //     return $userRepository->createOptionsQueryBuilder($user);
                   // },
          //      ];
      //});
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
