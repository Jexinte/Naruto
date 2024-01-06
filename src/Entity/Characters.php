<?php

namespace App\Entity;

use App\Repository\CharactersRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CharactersRepository::class)]
class Characters
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: 'text')]
    private ?string $history = null;

    #[ORM\Column(length: 255)]
    private ?string $imageCardPath = null;

    #[ORM\Column(length: 255)]
    private ?string $imageHistoryPath = null;

    #[ORM\Column(length: 255)]
    private ?string $village = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getHistory(): ?string
    {
        return $this->history;
    }

    public function setHistory(string $history): static
    {
        $this->history = $history;

        return $this;
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

    public function getVillage(): ?string
    {
        return $this->village;
    }

    public function setVillage(string $village): static
    {
        $this->village = $village;

        return $this;
    }
}
