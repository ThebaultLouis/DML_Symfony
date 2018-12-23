<?php

namespace App\Form;

use App\Entity\CoursSupplementaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;

use App\Entity\Niveau;

class CoursSupplementaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('coursDate', DateType::class, array(
              "years" => array(2018, 2019, 2020, 2021)
            ))
            ->add('horaireDebut')
            ->add('horaireFin', TimeType::class)
            ->add('niveau', EntityType::class,
            ['class' => Niveau::class,
            'choice_label' => 'title',
            'multiple' => true,
            'expanded' => true,
          ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CoursSupplementaire::class,
        ]);
    }
}
