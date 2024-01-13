<?php

namespace App\Entity;

use App\Repository\CharactersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
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
    #[Assert\NotBlank(message: 'Oops! Merci de spécifier le nom du personnage !')]
    #[Assert\Regex(
        pattern: '/^[A-Z]{1}[a-z\s]{1,}/',
        message: 'Oops! Le nom du personnage doit commencer par une majuscule !',
        match: true
    )]
    private ?string $name = null;

    #[ORM\Column(type: 'text')]
    #[Assert\NotBlank(message: 'Oops! Merci de spécifier l\'histoire du personnage!')]
    #[Assert\Regex(
        pattern: '/^[A-Z]{1}[a-z\s]{1,}/',
        message: 'Oops! L\'histoire du personnage doit commencer par une majuscule !',
        match: true
    )]
    private ?string $history = null;


    #[ORM\Column(length: 255)]
    private ?string $village = null;
    #[ORM\Column(length: 255)]
    private ?string $slug;

    #[ORM\OneToMany(mappedBy: 'characters', targetEntity: Media::class,cascade: ['persist'])]
    private Collection $media;
    #[Assert\Valid]
    #[Assert\Type(type: Media::class)]
    private Media $mediaForm;

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
        $this->slug = $slugger->slug($slug, '-')->lower();
    }

    /**
     * @return Collection<int, Media>
     */
    public function getMedia(): Collection
    {
        return $this->media;
    }

    public function addMedia(Media $media)
    {
        if (!$this->media->contains($media)) {
            $this->media->add($media);
            $media->setCharacters($this);
        }

        return $this;
    }

    public function removeMedia(Media $media): static
    {
        if ($this->media->removeElement($media)) {
            // set the owning side to null (unless already changed)
            if ($media->getCharacters() === $this) {
                $media->setCharacters(null);
            }
        }

        return $this;
    }

    public function getMediaForm(): Media
    {
        return $this->mediaForm;
    }

    public function setMediaForm(Media $mediaForm): void
    {
        $this->mediaForm = $mediaForm;
    }


}
