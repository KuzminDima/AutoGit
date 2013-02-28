<?php

namespace Auto\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ValuesPatterns
 *
 * @ORM\Table(name="values_patterns")
 * @ORM\Entity
 */
class ValuesPatterns
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
     * @ORM\Column(name="value", type="string", length=255, nullable=true)
     */
    private $value;

    /**
     * @var \Values
     *
     * @ORM\ManyToOne(targetEntity="Values")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="owner_id", referencedColumnName="id")
     * })
     */
    private $owner;

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
     * @return ValuesPatterns
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
     * Set owner
     *
     * @param \Auto\CoreBundle\Entity\Values $owner
     * @return ValuesPatterns
     */
    public function setOwner(\Auto\CoreBundle\Entity\Values $owner = null)
    {
        $this->owner = $owner;
    
        return $this;
    }

    /**
     * Get owner
     *
     * @return \Auto\CoreBundle\Entity\Values 
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set values
     *
     * @param \Auto\CoreBundle\Entity\Values $values
     * @return ValuesPatterns
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