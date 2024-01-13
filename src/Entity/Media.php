<?php
/**
 * PHP version 8.
 *
 * @category Entity
 * @package  Characters
 * @author   Yokke <mdembelepro@gmail.com>
 * @license  ISC License
 * @link     https://github.com/Jexinte/Naruto
 */

namespace App\Entity;

use App\Repository\MediaRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: MediaRepository::class)]
class Media
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $imageCardPath = null;

    #[ORM\Column(length: 255)]
    private ?string $imageHistoryPath = null;

    #[Assert\File(
        extensions: ['jpg','png','webp','jpeg'],
        extensionsMessage: 'Oops! Seuls les fichiers ayant les extensions suivantes sont acceptées : jpg,png,webp et jpeg'
    )]
    #[Assert\NotBlank(message: 'Oops! Veuillez sélectionner une image pour la carte du personnage!')]
    private ?UploadedFile $imageCardFile;

    #[Assert\File(
        extensions: ['jpg','png','webp','jpeg'],
        extensionsMessage: 'Oops! Seuls les fichiers ayant les extensions suivantes sont acceptées : jpg,png,webp et jpeg'
    )]
    #[Assert\NotBlank(message: 'Oops! Veuillez sélectionner une image pour l\'histoire du personnage!')]
    private ?UploadedFile $imageHistoryFile;

    #[ORM\ManyToOne(inversedBy: 'media')]
    private ?Characters $characters = null;

    /**
     * Summary of getId
     *
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Summary of getImageCardPath
     *
     */
    public function getImageCardPath(): ?string
    {
        return $this->imageCardPath;
    }

    /**
     * Summary of setImageCardPath
     *
     * @param string|null $imageCardPath String
     *
     * @return $this
     */
    public function setImageCardPath(?string $imageCardPath): static
    {
        $this->imageCardPath = $imageCardPath;

        return $this;
    }

    /**
     * Summary of getImageHistoryPath
     *
     */
    public function getImageHistoryPath(): ?string
    {
        return $this->imageHistoryPath;
    }

    /**
     * Summary of setImageHistoryPath
     *
     * @param string|null $imageHistoryPath String
     *
     * @return $this
     */
    public function setImageHistoryPath(?string $imageHistoryPath): static
    {
        $this->imageHistoryPath = $imageHistoryPath;

        return $this;
    }

    /**
     * Summary of getCharacters
     *
     */
    public function getCharacters(): ?Characters
    {
        return $this->characters;
    }

    /**
     * Summary of setCharacters
     *
     * @param Characters|null $characters Object
     *
     * @return $this
     */
    public function setCharacters(?Characters $characters): static
    {
        $this->characters = $characters;

        return $this;
    }

    /**
     * Summary of getImageCardFile
     *
     */
    public function getImageCardFile(): ?UploadedFile
    {
        return $this->imageCardFile;
    }

    /**
     * Summary of setImageCardFile
     *
     * @param UploadedFile|null $uploadedFile Object
     *
     */
    public function setImageCardFile(?UploadedFile $uploadedFile): void
    {
        $this->imageCardFile = $uploadedFile;
    }

    /**
     * Summary of getImageHistoryFile
     *
     */
    public function getImageHistoryFile(): ?UploadedFile
    {
        return $this->imageHistoryFile;
    }

    /**
     * Summary of setImageHistoryFile
     *
     * @param UploadedFile|null $uploadedFile Object
     */
    public function setImageHistoryFile(?UploadedFile $uploadedFile): void
    {
        $this->imageHistoryFile = $uploadedFile;
    }
}
