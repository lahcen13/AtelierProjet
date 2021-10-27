<?php

namespace App\Entity;

use App\Entity\Images;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\CatalogueRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @ORM\Entity(repositoryClass=CatalogueRepository::class)
 */
class Catalogue
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DateAt;

    /**
     * @ORM\Column(type="text")
     */
    private $imagePrincipale;

    /**
     * @ORM\OneToMany(targetEntity=Images::class, mappedBy="article", cascade={"persist"})
     */
    private $LesImages;




    public function __construct()
    {
        $this->DateAt = new \DateTime();
        $this->lesImages = new ArrayCollection();
        $this->LesImages = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDateAt(): ?\DateTimeInterface
    {
        return $this->DateAt;
    }

    public function setDateAt(\DateTimeInterface $DateAt): self
    {
        $this->DateAt = $DateAt;

        return $this;
    }

    public function getImagePrincipale(): ?string
    {
        return $this->imagePrincipale;
    }

    public function setImagePrincipale(string $imagePrincipale): self
    {
        $this->imagePrincipale = $imagePrincipale;

        return $this;
    }

    /**
     * @return Collection|Images[]
     */
    public function getLesImages(): Collection
    {
        return $this->LesImages;
    }

    public function addLesImage(Images $lesImage): self
    {
        if (!$this->LesImages->contains($lesImage)) {
            $this->LesImages[] = $lesImage;
            $this->LesImages->add($lesImage);
            $lesImage->setArticle($this);
        }
        return $this;
    }

    public function ajouterImage(Images $lesImage)
    {
        $this->LesImages->add($lesImage);
        $lesImage->setArticle($this);
    }

    public function removeLesImage(Images $lesImage): self
    {
        if ($this->LesImages->removeElement($lesImage)) {
            // set the owning side to null (unless already changed)
            if ($lesImage->getArticle() === $this) {
                $lesImage->setArticle(null);
            }
        }

        return $this;
    }
}