<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tag.
 *
 * @author Alex Ception <alexandre@creakiwi.com>
 */
class Tag
{
    /**
     *
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $albums;

    /**
     *
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $artists;

    /**
     *
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $songs;
}
