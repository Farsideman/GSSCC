<?php

namespace Application\Model\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Member
 *
 * @package Application\Model\Entity
 * @ORM\Table(name="Member")
 * @ORM\Entity
 */
 class Member extends AbstractEntity
 {
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    protected $name;

    /**
     * @return int
     */
    public function getId()
    {
        return $this -> id;
    }

    /**
     * @return int $id
     */
    public function setId()
    {
       return $this -> $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this -> name;
    }

    /**
     * @return string $name
     */
    public function setName()
    {
        return $this -> $name;
    }
}