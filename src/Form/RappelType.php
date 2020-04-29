<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RappelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
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
            ->add('telephone', NumberType::class
            ,[
            'attr'=>[
                    'placeholder'=>"Téléphone",
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
            ,[
              'attr' => [
                'class' => 'btn-lg'
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
