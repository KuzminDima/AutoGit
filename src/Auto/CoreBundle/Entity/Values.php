<?php

namespace Auto\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Values
 *
 * @ORM\Table(name="values")
 * @ORM\Entity
 */
class Values
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=false)
     */
    private $value;

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
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     * })
     */
    private $parent;



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
     * @return Values
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
     * Set characteristics
     *
     * @param \Auto\CoreBundle\Entity\Characteristics $characteristics
     * @return Values
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
     * Set parent
     *
     * @param \Auto\CoreBundle\Entity\Values $parent
     * @return Values
     */
    public function setParent(\Auto\CoreBundle\Entity\Values $parent = null)
    {
        $this->parent = $parent;
    
        return $this;
    }

    /**
     * Get parent
     *
     * @return \Auto\CoreBundle\Entity\Values 
     */
    public function getParent()
    {
        return $this->parent;
    }
}