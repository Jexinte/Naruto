<?php
/**
 * PHP version 8.
 *
 * @category Form
 * @package  CharacterType
 * @author   Yokke <mdembelepro@gmail.com>
 * @license  ISC License
 * @link     https://github.com/Jexinte/Naruto
 */

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
    /**
     * Summary of buildForm
     *
     * @param FormBuilderInterface $formBuilder Object
     * @param array $options Array
     *
     */
    public function buildForm(FormBuilderInterface $formBuilder, array $options): void
    {
        $formBuilder
            ->add('name', TextType::class, [
                'label' => 'Nom du personnage',
                'required' => false,
            ])
            ->add('history', TextareaType::class, [
                'label' => 'Histoire du personnage',
                'required' => false,
            ])

            ->add('village', ChoiceType::class, [
                'label' => 'Village du personnage',
                'choices' => [
                    'Konoha' => 'konoha',
                    'Kumo' => 'kumo',
                    'Suna' => 'suna'
                ]
            ])
            ->add('mediaForm', MediaType::class)
            ->add('save', SubmitType::class, ['label' => 'Envoyer','attr' => ['class' => 'btn btn-dark']])
        ;
    }

    /**
     * Summary of configureOptions
     *
     * @param OptionsResolver $optionsResolver Object
     *
     */
    public function configureOptions(OptionsResolver $optionsResolver): void
    {
        $optionsResolver->setDefaults([
            'data_class' => Characters::class,
            'attr' => ['id' => 'form']
        ]);
    }
}
