<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Album.
 *
 * @author Alex Ception <alexandre@creakiwi.com>
 */
class Album
{
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $artists;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $songs;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $tags;
}
