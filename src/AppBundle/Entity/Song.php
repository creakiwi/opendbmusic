<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Song.
 *
 * @author Alex Ception <alexandre@creakiwi.com>
 */
class Song
{
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $albums;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $artists;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $tags;
}
