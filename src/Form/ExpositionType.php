<?php

namespace App\Form;

use App\Entity\Exposition;
//use App\Repository\ChaussureRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExpositionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        //$exposition = $options['data'] ?? null;
        //$member = $exposition->getMembre();
        
        /*
        $builder
            ->add('titre')
            ->add('publiee')
            ->add('membre', null, [
                'disabled'   => true,
            ])
            ->add('chaussures', null, [
                    'query_builder' => function (ChaussureRepository $er) use ($member) {
                                    return $er->createQueryBuilder('c')
                                    ->leftJoin('c.placard', 'p')
                                    ->andWhere('p.member = :membre')
                                    ->setParameter('membre', $member)
                ;
                }
                ])
        ;
        */
        $builder
        ->add('titre')
        ->add('publiee')
        ->add('membre', null, [
            'disabled'   => true,
        ])
        ->add('chaussures', null, [
            'multiple' => true,
            'expanded' => true,
            'by_reference' => false
        ])
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Exposition::class,
        ]);
    }
}
