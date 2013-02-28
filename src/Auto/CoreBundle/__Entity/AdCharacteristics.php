<?php

namespace Auto\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdCharacteristics
 *
 * @ORM\Table(name="ad_characteristics")
 * @ORM\Entity
 */
class AdCharacteristics
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
     * @ORM\Column(name="value", type="string", length=255, nullable=true)
     */
    private $value;

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
     * @var \Characteristics
     *
     * @ORM\ManyToOne(targetEntity="Characteristics")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="characteristics_id", referencedColumnName="id")
     * })
     */
    private $characteristics;

    /**
     * @var \Values
     *
     * @ORM\ManyToOne(targetEntity="Values")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="values_id", referencedColumnName="id")
     * })
     */
    private $values;



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
     * Set value
     *
     * @param string $value
     * @return AdCharacteristics
     */
    public function setValue($value)
    {
        $this->value = $value;
    
        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set ad
     *
     * @param \Auto\CoreBundle\Entity\Ad $ad
     * @return AdCharacteristics
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

    /**
     * Set characteristics
     *
     * @param \Auto\CoreBundle\Entity\Characteristics $characteristics
     * @return AdCharacteristics
     */
    public function setCharacteristics(\Auto\CoreBundle\Entity\Characteristics $characteristics = null)
    {
        $this->characteristics = $characteristics;
    
        return $this;
    }

    /**
     * Get characteristics
     *
     * @return \Auto\CoreBundle\Entity\Characteristics 
     */
    public function getCharacteristics()
    {
        return $this->characteristics;
    }

    /**
     * Set values
     *
     * @param \Auto\CoreBundle\Entity\Values $values
     * @return AdCharacteristics
     */
    public function setValues(\Auto\CoreBundle\Entity\Values $values = null)
    {
        $this->values = $values;
    
        return $this;
    }

    /**
     * Get values
     *
     * @return \Auto\CoreBundle\Entity\Values 
     */
    public function getValues()
    {
        return $this->values;
    }
}