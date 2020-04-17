<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GalerieRepository")
 */
class Galerie
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datepublication;

    /**
     * @ORM\Column(type="text")
     */
    private $urlphoto;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDatePublication(): ?\DateTimeInterface
    {
        return $this->datepublication;
    }

    public function setDatePublication(\DateTimeInterface $datepublication): self
    {
        $this->datepublication = $datepublication;

        return $this;
    }

    public function getUrlPhoto(): ?string
    {
        return $this->urlphoto;
    }

    public function setUrlPhoto(string $urlphoto): self
    {
        $this->urlphoto = $urlphoto;

        return $this;
    }
}
