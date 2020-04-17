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
<<<<<<< HEAD
    private $datepublication;

    /**
     * @ORM\Column(type="text")
     */
    private $urlphoto;
=======
    private $date_publication;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $url_photo;
>>>>>>> bdd

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
<<<<<<< HEAD
        return $this->datepublication;
    }

    public function setDatePublication(\DateTimeInterface $datepublication): self
    {
        $this->datepublication = $datepublication;
=======
        return $this->date_publication;
    }

    public function setDatePublication(\DateTimeInterface $date_publication): self
    {
        $this->date_publication = $date_publication;
>>>>>>> bdd

        return $this;
    }

    public function getUrlPhoto(): ?string
    {
<<<<<<< HEAD
        return $this->urlphoto;
    }

    public function setUrlPhoto(string $urlphoto): self
    {
        $this->urlphoto = $urlphoto;
=======
        return $this->url_photo;
    }

    public function setUrlPhoto(string $url_photo): self
    {
        $this->url_photo = $url_photo;
>>>>>>> bdd

        return $this;
    }
}
