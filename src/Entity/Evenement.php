<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EvenementRepository")
 * @Vich\Uploadable
 */
class Evenement
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
    private $debut;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $fin;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

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

    public function getDebut(): ?\DateTimeInterface
    {
        return $this->debut;
    }

    public function setDebut(\DateTimeInterface $debut): self
    {
        $this->debut = $debut;

        return $this;
    }

    public function getFin(): ?\DateTimeInterface
    {
        if($this->fin == null)
        {
            return $this->getDebut();
        }
        else
        {
            return $this->fin;
        }
    }

    public function setFin(?\DateTimeInterface $fin): self
    {
        $this->fin = $fin;

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
    // upload photo -------------------------------------------------------//

    /**
        * @ORM\Column(type="string", length=255)
        * @var string
        */
       private $image;

       /**
        * @Vich\UploadableField(mapping="images_event", fileNameProperty="image")
        * @var File
        */
       private $imageFile;

       // /**
       //  * @ORM\Column(type="datetime")
       //  * @var \DateTime
       //  */
       // private $updatedAt;

       // ...

       public function setImageFile(File $image = null)
       {
           $this->imageFile = $image;

           // VERY IMPORTANT:
           // It is required that at least one field changes if you are using Doctrine,
           // otherwise the event listeners won't be called and the file is lost
           // if ($image) {
           //     // if 'updatedAt' is not defined in your entity, use another property
           //     $this->updatedAt = new \DateTime('now');
           // }
       }

       public function getImageFile()
       {
           return $this->imageFile;
       }

       public function setImage($image)
       {
           $this->image = $image;
       }

       public function getImage()
       {
           // return 'assets/img/Galerie/' .  $this->image;
           return $this->image;
       }

    // upload photo -------------------------------------------------------fin//

}
