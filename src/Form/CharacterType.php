<?php

namespace App\Form;

use App\Entity\Characters;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CharacterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name',TextType::class,[
                'label' => 'Nom du personnage',
                'required' => false,
            ])
            ->add('history',TextareaType::class,[
                'label' => 'Histoire du personnage',
                'required' => false,
            ])
            ->add('imageCard',FileType::class,[
                'label' => 'Ajouter une image pour la carte du personnage',
                'mapped' => false
            ])
            ->add('imageHistory',FileType::class,[
                'label' => 'Ajouter une image pour l\'histoire du personnage',
                'mapped' => false
            ])
            ->add('village',ChoiceType::class, [
                'label' => 'Village du personnage',
                'choices' => [
                    'Konoha' => true,
                    'Kumo' => 'kumo',
                    'Suna' => 'suna'
                ]
            ])
            ->add('save',SubmitType::class,['label' => 'Envoyer','attr' => ['class' => 'btn btn-dark']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Characters::class,
            'attr' => ['id' => 'form']
        ]);
    }
}
