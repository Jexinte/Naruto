<?php

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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImageCardPath(): ?string
    {
        return $this->imageCardPath;
    }

    public function setImageCardPath(?string $imageCardPath): static
    {
        $this->imageCardPath = $imageCardPath;

        return $this;
    }

    public function getImageHistoryPath(): ?string
    {
        return $this->imageHistoryPath;
    }

    public function setImageHistoryPath(?string $imageHistoryPath): static
    {
        $this->imageHistoryPath = $imageHistoryPath;

        return $this;
    }

    public function getCharacters(): ?Characters
    {
        return $this->characters;
    }

    public function setCharacters(?Characters $characters): static
    {
        $this->characters = $characters;

        return $this;
    }

    public function getImageCardFile(): ?UploadedFile
    {
        return $this->imageCardFile;
    }

    public function setImageCardFile(?UploadedFile $imageCardFile): void
    {
        $this->imageCardFile = $imageCardFile;
    }

    public function getImageHistoryFile(): ?UploadedFile
    {
        return $this->imageHistoryFile;
    }

    public function setImageHistoryFile(?UploadedFile $imageHistoryFile): void
    {
        $this->imageHistoryFile = $imageHistoryFile;
    }
}
