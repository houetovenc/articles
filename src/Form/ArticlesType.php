<?php

namespace App\Form;

use App\Entity\Articles;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ArticlesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class,[
                'label' => 'nom de l\'article :',
                'required' => true
            ])
            ->add('price', TextType::class,[
                'label' => 'prix de l\'article :',
                'required' => true
            ])
            ->add('decription', TextType::class,[
                'label' => 'Description de l\'article :',
                'required' => true
            ])
            // ->add('picture', FileType::class, [
            //     'label' => 'photo de l\'article :',
            //     'label' => 'Photo (png, jpeg)',
            //     'required' => false,
            // ])

            ->add('file', FileType::class, [
                'mapped' => false,
                'label' => 'Photo (png, jpeg)',
                'required' => false,])
                
            ->add('created_at', DateTimeType::class,[
                'label' => "date de réception :",
                'required' => false,
            ])
            ->add('save', SubmitType::class,[
                'label' => 'Submit',
                
            ])
        ;
    
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Articles::class,
        ]);
    }
}