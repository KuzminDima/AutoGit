<?php

namespace Auto\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FieldToValidators
 *
 * @ORM\Table(name="field_to_validators")
 * @ORM\Entity
 */
class FieldToValidators
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
     * @var \Characteristics
     *
     * @ORM\ManyToOne(targetEntity="Characteristics")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="characteristics_id", referencedColumnName="id")
     * })
     */
    private $characteristics;

    /**
     * @var \FieldValidators
     *
     * @ORM\ManyToOne(targetEntity="FieldValidators")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="field_validators_id", referencedColumnName="id")
     * })
     */
    private $fieldValidators;



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
     * Set characteristics
     *
     * @param \Auto\CoreBundle\Entity\Characteristics $characteristics
     * @return FieldToValidators
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
     * Set fieldValidators
     *
     * @param \Auto\CoreBundle\Entity\FieldValidators $fieldValidators
     * @return FieldToValidators
     */
    public function setFieldValidators(\Auto\CoreBundle\Entity\FieldValidators $fieldValidators = null)
    {
        $this->fieldValidators = $fieldValidators;
    
        return $this;
    }

    /**
     * Get fieldValidators
     *
     * @return \Auto\CoreBundle\Entity\FieldValidators 
     */
    public function getFieldValidators()
    {
        return $this->fieldValidators;
    }
}