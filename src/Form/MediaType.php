<?php
/**
 * PHP version 8.
 *
 * @category Form
 * @package  MediaType
 * @author   Yokke <mdembelepro@gmail.com>
 * @license  ISC License
 * @link     https://github.com/Jexinte/Naruto
 */

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
            ->add(
                'imageCardFile',
                FileType::class,
                [
                'label' => 'Ajouter une image pour la carte du personnage',
                'required' => false
            ]
            )
            ->add(
                'imageHistoryFile',
                FileType::class,
                [
                'label' => "Ajouter une image pour l'histoire du personnage",
                'required' => false
            ]
            );
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
            'data_class' => Media::class,
        ]);
    }
}
