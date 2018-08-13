<?php

namespace PZ\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * rien
 *
 * @ORM\Table(name="rien")
 * @ORM\Entity(repositoryClass="PZ\CoreBundle\Repository\rienRepository")
 */
class rien
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

