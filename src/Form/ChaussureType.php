<?php

namespace App\Form;

use App\Entity\Chaussure;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChaussureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('TitreChaussure')
            ->add('Categorie')
            ->add('Marque')
            ->add('Couleur')
            ->add('placard', null, [
                'disabled'   => true,
            ])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Chaussure::class,
        ]);
    }
}
