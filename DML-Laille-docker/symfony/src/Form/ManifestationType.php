<?php

namespace App\Form;

use App\Entity\Manifestation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Vich\UploaderBundle\Form\Type\VichFileType;

class ManifestationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('eventDate', DateType::class, array(
              "years" => array(2018, 2019, 2020, 2021)
            ))
            ->add('ville')
            ->add('cp')
            ->add('club')
            ->add('description')
            ->add('imageFile', VichFileType::class, [
              'required' => false,
              'allow_delete' => true
          ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Manifestation::class,
        ]);
    }
}
