<?php

namespace App\Form;

use App\Entity\Characters;
use App\Entity\Media;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MediaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('imageCardFile',FileType::class,
            [
                'label' => 'Ajouter une image pour la carte du personnage',
                'required' => false
            ])
            ->add('imageHistoryFile',FileType::class,
            [
                'label' => 'Ajouter une image pour l\'histoire du personnage',
                'required' => false
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Media::class,
        ]);
    }
}
