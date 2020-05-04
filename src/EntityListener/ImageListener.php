<?php

namespace App\EntityListener;

use App\Entity\Galerie;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Symfony\Component\Asset\Package;

class ImageListener
{
    /**
     * @var Package
     */
    private $assetsHelper;

    public function __construct($assetsHelper)
    {
        $this->assetsHelper = $assetsHelper;
    }

    public function postLoad(Galerie $image, LifecycleEventArgs $args): void
    {
        $image->setWebView(
            $this->assetsHelper->getUrl("/assets/img/Galerie/".$image->getFilename())
        );

        if (!$image->getTempFilename()) {
            $image->setTempFilename($image->getFilename());
        }
    }
}