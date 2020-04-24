<?php

namespace App\EntityListener\EasyAdmin;

use App\Kernel;
use App\Entity\Galerie;
use App\Service\FileUploader;
use Symfony\Component\EventDispatcher\GenericEvent;


class ImageListener
{
    /**
     * @var Galerie
     */
    private $image;

    /**
     * @var FileUploader
     */
    private $fileUploader;

    private $imageUploadPath;

    public function __construct(FileUploader $fileUploader, $imageUploadPath)
    {
        $this->fileUploader = $fileUploader;
        $this->imageUploadPath = $imageUploadPath;
    }

    public function onEasyAdminPrePersist(GenericEvent $event)
    {
        if (!$event->getSubject() instanceof Galerie) {
            return;
        }

        $this->image = $event->getSubject();
        $filename = $this->fileUploader->upload($this->image->getFile(), $this->imageUploadPath);
        $this->image->setFilename($filename);
    }

    public function onEasyAdminPreUpdate(GenericEvent $event)
    {
        if (!$event->getSubject() instanceof Galerie) {
            return;
        }

        $this->image = $event->getSubject();
        $filename = $this->fileUploader->upload($this->image->getFile(), $this->imageUploadPath);

        $this->image->setFilename($filename);
        if(file_exists(Kernel::getProjectDir().'/public'.$this->image->getTempFilename()))
        {
            unlink(Kernel::getProjectDir().'/public'.$this->image->getTempFilename());
        }
    }

    public function onEasyAdminPreRemove(GenericEvent $event)
    {
        if (!$event->getSubject() instanceof Galerie) {
            return;
        }

        $this->image = $event->getSubject();
        if(file_exists(Kernel::getProjectDir().'/public'.$this->image->getTempFilename()))
        {
            unlink(Kernel::getProjectDir().'/public'.$this->image->getTempFilename());
        }
    }
}