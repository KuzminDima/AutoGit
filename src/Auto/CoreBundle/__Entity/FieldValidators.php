<?php

namespace Auto\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FieldValidators
 *
 * @ORM\Table(name="field_validators")
 * @ORM\Entity
 */
class FieldValidators
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
     * @ORM\Column(name="class_name", type="string", length=255, nullable=false)
     */
    private $className;

    /**
     * @var \ValidatorsGroup
     *
     * @ORM\ManyToOne(targetEntity="ValidatorsGroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="validators_group_id", referencedColumnName="id")
     * })
     */
    private $validatorsGroup;



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
     * Set className
     *
     * @param string $className
     * @return FieldValidators
     */
    public function setClassName($className)
    {
        $this->className = $className;
    
        return $this;
    }

    /**
     * Get className
     *
     * @return string 
     */
    public function getClassName()
    {
        return $this->className;
    }

    /**
     * Set validatorsGroup
     *
     * @param \Auto\CoreBundle\Entity\ValidatorsGroup $validatorsGroup
     * @return FieldValidators
     */
    public function setValidatorsGroup(\Auto\CoreBundle\Entity\ValidatorsGroup $validatorsGroup = null)
    {
        $this->validatorsGroup = $validatorsGroup;
    
        return $this;
    }

    /**
     * Get validatorsGroup
     *
     * @return \Auto\CoreBundle\Entity\ValidatorsGroup 
     */
    public function getValidatorsGroup()
    {
        return $this->validatorsGroup;
    }
}