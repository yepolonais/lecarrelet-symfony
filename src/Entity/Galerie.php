<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


/**
 * @ORM\Entity(repositoryClass="App\Repository\GalerieRepository")
 * @Vich\Uploadable
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
    public $titre;

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

// upload photo -------------------------------------------------------//

/**
    * @ORM\Column(type="string", length=255)
    * @var string
    */
   private $image;

   /**
    * @Vich\UploadableField(mapping="images_galerie", fileNameProperty="image")
    * @var File
    */
   private $imageFile;

   /**
    * @ORM\Column(type="datetime")
    * @var \DateTime
    */
   private $updated;


   public function setImageFile(File $image = null)
   {
       $this->imageFile = $image;

       // VERY IMPORTANT:
       // It is required that at least one field changes if you are using Doctrine,
       // otherwise the event listeners won't be called and the file is lost
       if ($image) {
           // if 'updatedAt' is not defined in your entity, use another property
           $this->updated = new \DateTime('now');
       }
   }

   public function getImageFile()
   {
       return $this->imageFile;
   }

   public function getUpdated()
   {
       return $this->updated;
   }

   public function setUpdated($updated)
   {
       $this->image = $updated;
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
