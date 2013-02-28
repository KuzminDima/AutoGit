<?php

namespace Auto\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdImages
 *
 * @ORM\Table(name="ad_images")
 * @ORM\Entity
 */
class AdImages
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
     * @ORM\Column(name="alias", type="string", length=255, nullable=false)
     */
    private $alias;

    /**
     * @var string
     *
     * @ORM\Column(name="original_name", type="string", length=255, nullable=false)
     */
    private $originalName;

    /**
     * @var string
     *
     * @ORM\Column(name="download_link", type="string", length=255, nullable=false)
     */
    private $downloadLink;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ordering", type="boolean", nullable=true)
     */
    private $ordering;

    /**
     * @var \Ad
     *
     * @ORM\ManyToOne(targetEntity="Ad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ad_id", referencedColumnName="id")
     * })
     */
    private $ad;



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
     * Set alias
     *
     * @param string $alias
     * @return AdImages
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    
        return $this;
    }

    /**
     * Get alias
     *
     * @return string 
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set originalName
     *
     * @param string $originalName
     * @return AdImages
     */
    public function setOriginalName($originalName)
    {
        $this->originalName = $originalName;
    
        return $this;
    }

    /**
     * Get originalName
     *
     * @return string 
     */
    public function getOriginalName()
    {
        return $this->originalName;
    }

    /**
     * Set downloadLink
     *
     * @param string $downloadLink
     * @return AdImages
     */
    public function setDownloadLink($downloadLink)
    {
        $this->downloadLink = $downloadLink;
    
        return $this;
    }

    /**
     * Get downloadLink
     *
     * @return string 
     */
    public function getDownloadLink()
    {
        return $this->downloadLink;
    }

    /**
     * Set ordering
     *
     * @param boolean $ordering
     * @return AdImages
     */
    public function setOrdering($ordering)
    {
        $this->ordering = $ordering;
    
        return $this;
    }

    /**
     * Get ordering
     *
     * @return boolean 
     */
    public function getOrdering()
    {
        return $this->ordering;
    }

    /**
     * Set ad
     *
     * @param \Auto\CoreBundle\Entity\Ad $ad
     * @return AdImages
     */
    public function setAd(\Auto\CoreBundle\Entity\Ad $ad = null)
    {
        $this->ad = $ad;
    
        return $this;
    }

    /**
     * Get ad
     *
     * @return \Auto\CoreBundle\Entity\Ad 
     */
    public function getAd()
    {
        return $this->ad;
    }
}