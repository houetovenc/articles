<?php

namespace App\Form;

use App\Entity\Prestation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PrestationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('montage', CheckboxType::class, [
                'label' => "Montage pneumatique 10€",
                'required' => false,
                'attr' => [
                    'value' => 10
                ],
            ])


            ->add('depannage', CheckboxType::class, [
                'label' => "Dépannage pneumatique 15€",
                'required' => false,
                'attr' => [
                    'value' => 15
                ]
            ])


            ->add('equilibre', CheckboxType::class, [
                'label' => "Équilibrage roue 10€",
                'required' => false,
                'attr' => [
                    'value' => 10
                ]
            ])


            ->add('valve', CheckboxType::class, [
                'label' => "Changemement de valve 15€",
                'required' => false,
                'attr' => [
                    'value' => 15
                ]
            ])


            ->add('plaquette', CheckboxType::class, [
                'label' => "Changement de plaquette de frein avant/arrière 10€",
                'required' => false,
                'attr' => [
                    'value' => 10
                ]
            ])


            ->add('disque', CheckboxType::class, [
                'label' => "Changement disque de frein 15€",
                'required' => false,
                'attr' => [
                    'value' => 15
                ]
            ])


            ->add('vidange', CheckboxType::class, [
                'label' => "Vidange Huile + filtre à huile 20€",
                'required' => false,
                'attr' => [
                    'value' => 20
                ]
            ])


        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Prestation::class,
        ]);
    }
}
