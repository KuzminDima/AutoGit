<?php

namespace Auto\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ValidatorOptions
 *
 * @ORM\Table(name="validator_options")
 * @ORM\Entity
 */
class ValidatorOptions
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

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
     * @var \SystemTypes
     *
     * @ORM\ManyToOne(targetEntity="SystemTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="system_types_id", referencedColumnName="id")
     * })
     */
    private $systemTypes;



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
     * @return ValidatorOptions
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
     * Set fieldValidators
     *
     * @param \Auto\CoreBundle\Entity\FieldValidators $fieldValidators
     * @return ValidatorOptions
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

    /**
     * Set systemTypes
     *
     * @param \Auto\CoreBundle\Entity\SystemTypes $systemTypes
     * @return ValidatorOptions
     */
    public function setSystemTypes(\Auto\CoreBundle\Entity\SystemTypes $systemTypes = null)
    {
        $this->systemTypes = $systemTypes;
    
        return $this;
    }

    /**
     * Get systemTypes
     *
     * @return \Auto\CoreBundle\Entity\SystemTypes 
     */
    public function getSystemTypes()
    {
        return $this->systemTypes;
    }
}