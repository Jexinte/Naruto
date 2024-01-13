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
        message: "Oops! L'histoire du personnage doit commencer par une majuscule !",
        match: true
    )]
    private ?string $history = null;


    #[ORM\Column(length: 255)]
    private ?string $village = null;

    #[ORM\Column(length: 255)]
    private ?string $slug;

    #[ORM\OneToMany(mappedBy: 'characters', targetEntity: Media::class, cascade: ['persist'])]
    private Collection $media;

    #[Assert\Valid]
    #[Assert\Type(type: Media::class)]
    private Media $mediaForm;

    /**
     * Summary of __construct
     */
    public function __construct()
    {
        $this->media = new ArrayCollection();
    }

    /**
     * Summary of getId
     *
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Summary of getName
     *
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Summary of setName
     *
     * @param string $name String
     *
     * @return $this
     */
    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Summary of getHistory
     *
     */
    public function getHistory(): ?string
    {
        return $this->history;
    }

    /**
     * Summary of setHistory
     *
     * @param string $history String
     *
     * @return $this
     */
    public function setHistory(string $history): static
    {
        $this->history = $history;

        return $this;
    }


    /**
     * Summary of getVillage
     *
     */
    public function getVillage(): ?string
    {
        return $this->village;
    }

    /**
     * Summary of setVillage
     *
     * @param string $village String
     *
     * @return $this
     */
    public function setVillage(string $village): static
    {
        $this->village = $village;

        return $this;
    }

    /**
     * Summary of getSlug
     *
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }

    /**
     * Summary of setSlug
     *
     * @param string|null $slug String
     * @param AsciiSlugger $asciiSlugger Object
     *
     */
    public function setSlug(?string $slug, AsciiSlugger $asciiSlugger): void
    {
        $this->slug = $asciiSlugger->slug($slug, '-')->lower();
    }

    /**
     * Summary of getMedia
     *
     * @return Collection<int, Media>
     */
    public function getMedia(): Collection
    {
        return $this->media;
    }

    /**
     * Summary of addMedia
     * @param Media $media Object
     *
     * @return $this
     */
    public function addMedia(Media $media): static
    {
        if (!$this->media->contains($media)) {
            $this->media->add($media);
            $media->setCharacters($this);
        }

        return $this;
    }


    /**
     * Summary of getMediaForm
     *
     */
    public function getMediaForm(): Media
    {
        return $this->mediaForm;
    }

    /**
     * Summary of setMediaForm
     *
     * @param Media $media Object
     *
     */
    public function setMediaForm(Media $media): void
    {
        $this->mediaForm = $media;
    }


}
