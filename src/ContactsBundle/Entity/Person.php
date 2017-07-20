<?php

namespace ContactsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 *
 * @ORM\Table(name="person")
 * @ORM\Entity(repositoryClass="ContactsBundle\Repository\PersonRepository")
 */
class Person
{
    /**
     * @var
     *
     * @ORM\ManyToOne(targetEntity="Address", inversedBy="person")
     * @ORM\JoinColumn(name="address_id" ,referencedColumnName="id")
     */
    private $address;

    /**
     * @var
     *
     * @ORM\ManyToOne(targetEntity="Phone", inversedBy="person")
     * @ORM\JoinColumn(name="phone_id" ,referencedColumnName="id")
     */
    private $phone;

    /**
     * @var
     *
     * @ORM\ManyToOne(targetEntity="Email", inversedBy="person")
     * @ORM\JoinColumn(name="email_id" ,referencedColumnName="id")
     */
    private $email;

    /**
     * @var
     *
     * @ORM\ManyToMany(targetEntity="Groups", mappedBy="person")
     */
    private $groups;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=100)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Person
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     * @return Person
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Person
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->groups = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set address
     *
     * @param \ContactsBundle\Entity\Address $address
     * @return Person
     */
    public function setAddress(\ContactsBundle\Entity\Address $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return \ContactsBundle\Entity\Address 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set phone
     *
     * @param \ContactsBundle\Entity\Phone $phone
     * @return Person
     */
    public function setPhone(\ContactsBundle\Entity\Phone $phone = null)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return \ContactsBundle\Entity\Phone 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set email
     *
     * @param \ContactsBundle\Entity\Email $email
     * @return Person
     */
    public function setEmail(\ContactsBundle\Entity\Email $email = null)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return \ContactsBundle\Entity\Email 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Add groups
     *
     * @param \ContactsBundle\Entity\Groups $groups
     * @return Person
     */
    public function addGroup(\ContactsBundle\Entity\Groups $groups)
    {
        $this->groups[] = $groups;

        return $this;
    }

    /**
     * Remove groups
     *
     * @param \ContactsBundle\Entity\Groups $groups
     */
    public function removeGroup(\ContactsBundle\Entity\Groups $groups)
    {
        $this->groups->removeElement($groups);
    }

    /**
     * Get groups
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGroups()
    {
        return $this->groups;
    }
}
