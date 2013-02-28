<?php

namespace Auto\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacteristicTypeOptionValue
 *
 * @ORM\Table(name="characteristic_type_option_value")
 * @ORM\Entity
 */
class CharacteristicTypeOptionValue
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
     * @var \FieldOptions
     *
     * @ORM\ManyToOne(targetEntity="FieldOptions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="field_options_id", referencedColumnName="id")
     * })
     */
    private $fieldOptions;



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
     * @return CharacteristicTypeOptionValue
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
     * @return CharacteristicTypeOptionValue
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
     * Set fieldOptions
     *
     * @param \Auto\CoreBundle\Entity\FieldOptions $fieldOptions
     * @return CharacteristicTypeOptionValue
     */
    public function setFieldOptions(\Auto\CoreBundle\Entity\FieldOptions $fieldOptions = null)
    {
        $this->fieldOptions = $fieldOptions;
    
        return $this;
    }

    /**
     * Get fieldOptions
     *
     * @return \Auto\CoreBundle\Entity\FieldOptions 
     */
    public function getFieldOptions()
    {
        return $this->fieldOptions;
    }
}