<?php

namespace App\Form;

use App\Entity\Devis;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class DevisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder


            ->add('firstname', TextType::class, [
                'label' => "Votre prénom:",
                'required' => true,
                'attr' => [
                    'placeholder' => "Saisir votre prénom"
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => "Ce champs est obligatoire !"
                    ])
                ]
            ])


            ->add('create_At', DateType::class, [
                'label' => "Date de création",
                'required' => true,
            ])



            ->add('price', MoneyType::class, [
                'label' => "Total des prestations"
            ])



            ->add('lastname', TextType::class, [
                'label' => "Votre nom: ",
                'required' => true,
                'attr' => [
                    'placeholder' => "Saisir votre nom"
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => "Ce champs est obligatoire !"
                    ])
                ]
            ])



            ->add('email', EmailType::class, [
                'label' => "Email",
                'required' => true,
                'attr' => [
                    'placeholder' => "Saisir votre adresse mail"
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => "Ce champs est obligatoire !"
                    ])
                ]
            ])



        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Devis::class,
        ]);
    }
}
