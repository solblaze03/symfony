<?php

namespace App\Form;

use App\Entity\Centre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Centre1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('codi')
            ->add('centre')
            ->add('direccio')
            ->add('localitat')
            ->add('telefon')
            ->add('query')
            ->add('regim')
            ->add('provincia')
            ->add('cicle')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Centre::class,
        ]);
    }
}
