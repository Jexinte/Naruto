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
     * @param FormBuilderInterface $builder Object
     * @param array $options Array
     *
     * @return void
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
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
                'label' => 'Ajouter une image pour l\'histoire du personnage',
                'required' => false
            ]
            );
    }

    /**
     * Summary of configureOptions
     *
     * @param OptionsResolver $resolver Object
     *
     * @return void
     */
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Media::class,
        ]);
    }
}
