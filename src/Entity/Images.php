<?php

namespace App\Entity;

use App\Entity\Catalogue;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ImagesRepository;

/**
 * @ORM\Entity(repositoryClass=ImagesRepository::class)
 */
class Images
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @ORM\ManyToOne(targetEntity=Catalogue::class, inversedBy="LesImages")
     */
    private $article;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getArticle(): ?Catalogue
    {
        return $this->article;
    }

    public function setArticle(?Catalogue $article): self
    {
        $this->article = $article;

        return $this;
    }
}