<?php

namespace PZ\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;



/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="PZ\UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var
     *
     * @ORM\ManyToMany(targetEntity="PZ\UserBundle\Entity\Group", inversedBy="users")
     * @ORM\JoinTable(name="users_groups",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
     * )
     */
    protected $groups;

    /**
     * @var
     *
     * @ORM\Column(name="firstname", type="string", length=255, nullable=true)
     */
    protected $firstname;

    /**
     * @var
     *
     * @ORM\Column(name="lastname", type="string", length=255, nullable=false)
     */
    protected $lastname;

    /**
     * @var
     *
     * @ORM\Column(name="position", type="string", nullable=true)
     */
    protected $position;

    /**
     * @var
     *
     * @ORM\Column(name="cockheigh", type="integer", nullable=false)
     */
    protected $cockHeight;

    /**
     * @var
     *
     * @ORM\Column(name="cockweight", type="integer", nullable=false)
     */
    protected $cockWeight;

    /**
     * @var
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=false)
     */
    protected $city;

    /**
     * @var
     *
     * @ORM\Column(name="creationDate", type="datetime", nullable=true)
     */
    protected $creationDate;

    /**
     * @var
     *
     * @ORM\Column(name="dateBirth", type="datetime", nullable=true)
     */
    protected $dateBirth;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->groups = new ArrayCollection();
        $this->creationDate = new \DateTime();

    }

    /**
     * @return mixed
     */
    public function getCockHeight()
    {
        return $this->cockHeight;
    }

    /**
     * @param mixed $cockHeight
     */
    public function setCockHeight($cockHeight)
    {
        $this->cockHeight = $cockHeight;
    }

    /**
     * @return mixed
     */
    public function getCockWeight()
    {
        return $this->cockWeight;
    }

    /**
     * @param mixed $cockWeight
     */
    public function setCockWeight($cockWeight)
    {
        $this->cockWeight = $cockWeight;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * @param mixed $groups
     */
    public function setGroups($groups)
    {
        $this->groups = $groups;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * @param mixed $creationDate
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;
    }

    /**
     * @return mixed
     */
    public function getDateBirth()
    {
        return $this->dateBirth;
    }

    /**
     * @param mixed $dateBirth
     */
    public function setDateBirth($dateBirth)
    {
        $this->dateBirth = $dateBirth;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }




}
