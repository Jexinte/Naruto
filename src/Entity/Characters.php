<?php

namespace App\Entity;

use App\Repository\CharactersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\AsciiSlugger;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: CharactersRepository::class)]
class Characters
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Oops! Ce champ ne peut être vide !')]
    #[Assert\Regex(
        pattern:'/^[A-Z]{1}[a-z\s]{1,}/',
        message: 'Oops! Le nom du personnage doit commencer par une majuscule !',
        match: true
    )]
    private ?string $name = null;

    #[ORM\Column(type: 'text')]
    #[Assert\NotBlank(message: 'Oops! Ce champ ne peut être vide !')]
    private ?string $history = null;


    #[ORM\Column(length: 255)]
    private ?string $village = null;
    #[ORM\Column(length: 255)]
    private ?string $slug;

    #[ORM\OneToMany(mappedBy: 'characters', targetEntity: Media::class)]
    private Collection $media;

    public function __construct()
    {
        $this->media = new ArrayCollection();
    }

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


    public function getVillage(): ?string
    {
        return $this->village;
    }

    public function setVillage(string $village): static
    {
        $this->village = $village;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug, AsciiSlugger $slugger): void
    {
        $this->slug = $slugger->slug($slug, '-');
    }

    /**
     * @return Collection<int, Media>
     */
    public function getMedia(): Collection
    {
        return $this->media;
    }

    public function addMedium(Media $medium): static
    {
        if (!$this->media->contains($medium)) {
            $this->media->add($medium);
            $medium->setCharacters($this);
        }

        return $this;
    }

    public function removeMedium(Media $medium): static
    {
        if ($this->media->removeElement($medium)) {
            // set the owning side to null (unless already changed)
            if ($medium->getCharacters() === $this) {
                $medium->setCharacters(null);
            }
        }

        return $this;
    }
}
