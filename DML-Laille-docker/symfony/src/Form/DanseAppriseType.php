<?php

namespace App\Form;

use App\Entity\DanseApprise;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Vich\UploaderBundle\Form\Type\VichFileType;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Niveau;
use App\Form\DanseReviseeType;

class DanseAppriseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('youtubeLink')
            ->add('danceDate', DateType::class, array(
              "years" => array(2018, 2019, 2020, 2021)
            ))
            ->add('niveau', EntityType::class,
            ['class' => Niveau::class,
            'choice_label' => 'title'
          ])
          ->add('danseRevisees', CollectionType::class, array(
            'entry_type' => DanseReviseeType::class,
            "entry_options" => array("label" => false),
          ))
          ->add('imageFile', VichFileType::class, [
            'required' => false,
            'allow_delete' => true
        ]);
          //->add('brochure', FileType::class, array('label' => 'Brochure (PDF file)'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => DanseApprise::class,
        ]);
    }
}
