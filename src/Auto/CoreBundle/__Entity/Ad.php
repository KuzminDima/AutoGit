<?php

namespace Auto\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ad
 *
 * @ORM\Table(name="ad")
 * @ORM\Entity
 */
class Ad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publication_date", type="datetime", nullable=false)
     */
    private $publicationDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expiration_date", type="datetime", nullable=false)
     */
    private $expirationDate;

    /**
     * @var \AdStatuses
     *
     * @ORM\ManyToOne(targetEntity="AdStatuses")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ad_statuses_id", referencedColumnName="id")
     * })
     */
    private $adStatuses;

    /**
     * @var \Categories
     *
     * @ORM\ManyToOne(targetEntity="Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categories_id", referencedColumnName="id")
     * })
     */
    private $categories;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="owner_id", referencedColumnName="id")
     * })
     */
    private $owner;



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
     * Set title
     *
     * @param string $title
     * @return Ad
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Ad
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
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return Ad
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;
    
        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \DateTime 
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set publicationDate
     *
     * @param \DateTime $publicationDate
     * @return Ad
     */
    public function setPublicationDate($publicationDate)
    {
        $this->publicationDate = $publicationDate;
    
        return $this;
    }

    /**
     * Get publicationDate
     *
     * @return \DateTime 
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * Set expirationDate
     *
     * @param \DateTime $expirationDate
     * @return Ad
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
    
        return $this;
    }

    /**
     * Get expirationDate
     *
     * @return \DateTime 
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Set adStatuses
     *
     * @param \Auto\CoreBundle\Entity\AdStatuses $adStatuses
     * @return Ad
     */
    public function setAdStatuses(\Auto\CoreBundle\Entity\AdStatuses $adStatuses = null)
    {
        $this->adStatuses = $adStatuses;
    
        return $this;
    }

    /**
     * Get adStatuses
     *
     * @return \Auto\CoreBundle\Entity\AdStatuses 
     */
    public function getAdStatuses()
    {
        return $this->adStatuses;
    }

    /**
     * Set categories
     *
     * @param \Auto\CoreBundle\Entity\Categories $categories
     * @return Ad
     */
    public function setCategories(\Auto\CoreBundle\Entity\Categories $categories = null)
    {
        $this->categories = $categories;
    
        return $this;
    }

    /**
     * Get categories
     *
     * @return \Auto\CoreBundle\Entity\Categories 
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Set owner
     *
     * @param \Auto\CoreBundle\Entity\Users $owner
     * @return Ad
     */
    public function setOwner(\Auto\CoreBundle\Entity\Users $owner = null)
    {
        $this->owner = $owner;
    
        return $this;
    }

    /**
     * Get owner
     *
     * @return \Auto\CoreBundle\Entity\Users 
     */
    public function getOwner()
    {
        return $this->owner;
    }
}