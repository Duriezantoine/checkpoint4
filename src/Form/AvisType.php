<?php

namespace App\Form;

use App\Entity\Avis;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AvisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Commentaire', CommentaireType::class, [
                'label' => "Vous pouvez mettre votre commentaire", 
                'attr'=>[
                    'class'=>'form-control'
                ]
            ])
            ->add('Created_at', Created_atType::class, [
                'label' => "Vous pouvez mettre votre commentaire", 
                'attr'=>[
                    'class'=>'form-control'
                ]
            ])
            ->add('Pays', TextType::class, [
                'label' => "Vous pouvez mettre votre commentaire", 
                'attr'=>[
                    'class'=>'form-control'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Avis::class,
        ]);
    }
}