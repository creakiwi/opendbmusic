<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Artist.
 *
 * @author Alex Ception <alexandre@creakiwi.com>
 */
class Artist
{
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $albums;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $tags;
}
