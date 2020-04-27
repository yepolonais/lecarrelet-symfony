<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CarteRepository")
 */
class Carte
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
    private $categorie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $souscategorie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titre;

    /**
     * @ORM\Column(type="float")
     */
    private $prix1;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $prix2;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantite1;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantite2;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getSouscategorie(): ?string
    {
        return $this->souscategorie;
    }

    public function setSouscategorie(?string $souscategorie): self
    {
        $this->souscategorie = $souscategorie;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getPrix1(): ?float
    {
        return $this->prix1;
    }

    public function setPrix1(float $prix1): self
    {
        $this->prix1 = $prix1;

        return $this;
    }

    public function getPrix2(): ?float
    {
        return $this->prix2;
    }

    public function setPrix2(?float $prix2): self
    {
        $this->prix2 = $prix2;

        return $this;
    }

    public function getQuantite1(): ?int
    {
        return $this->quantite1;
    }

    public function setQuantite1(?int $quantite1): self
    {
        $this->quantite1 = $quantite1;

        return $this;
    }

    public function getQuantite2(): ?int
    {
        return $this->quantite2;
    }

    public function setQuantite2(?int $quantite2): self
    {
        $this->quantite2 = $quantite2;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

}
