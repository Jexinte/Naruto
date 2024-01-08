<?php

namespace App\Entity;

use App\Repository\MediaRepository;
use Doctrine\ORM\Mapping as ORM;

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

    public function setImageCardPath(string $imageCardPath): static
    {
        $this->imageCardPath = $imageCardPath;

        return $this;
    }

    public function getImageHistoryPath(): ?string
    {
        return $this->imageHistoryPath;
    }

    public function setImageHistoryPath(string $imageHistoryPath): static
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
}
