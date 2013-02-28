<?php

namespace Auto\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacteristicValidatorOptionValue
 *
 * @ORM\Table(name="characteristic_validator_option_value")
 * @ORM\Entity
 */
class CharacteristicValidatorOptionValue
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
     * @var \ValidatorOptions
     *
     * @ORM\ManyToOne(targetEntity="ValidatorOptions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="validator_options_id", referencedColumnName="id")
     * })
     */
    private $validatorOptions;

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
     * Set value
     *
     * @param string $value
     * @return CharacteristicValidatorOptionValue
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
     * @return CharacteristicValidatorOptionValue
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
     * Set validatorOptions
     *
     * @param \Auto\CoreBundle\Entity\ValidatorOptions $validatorOptions
     * @return CharacteristicValidatorOptionValue
     */
    public function setValidatorOptions(\Auto\CoreBundle\Entity\ValidatorOptions $validatorOptions = null)
    {
        $this->validatorOptions = $validatorOptions;
    
        return $this;
    }

    /**
     * Get validatorOptions
     *
     * @return \Auto\CoreBundle\Entity\ValidatorOptions 
     */
    public function getValidatorOptions()
    {
        return $this->validatorOptions;
    }

    /**
     * Set fieldValidators
     *
     * @param \Auto\CoreBundle\Entity\FieldValidators $fieldValidators
     * @return CharacteristicValidatorOptionValue
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