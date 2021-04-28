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

class DevisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder


            ->add('title', TextType::class, [
                'label' => "Votre prénom:",
                'required' => true,
                'attr' => [
                    'placeholder' => "Saisir votre prénom"
                ],
            ])


            ->add('create_At', DateType::class, [
                'label' => "Date de création",
                'required' => true,
            ])



            ->add('price', MoneyType::class, [
                'label' => "Total des prestations"
            ])



            ->add('name', TextType::class, [
                'label' => "Votre nom: ",
                'required' => true,
                'attr' => [
                    'placeholder' => "Saisir votre nom"
                ],
            ])



            ->add('email', EmailType::class, [
                'label' => "Email",
                'required' => true,
                'attr' => [
                    'placeholder' => "Saisir votre adresse mail"
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
