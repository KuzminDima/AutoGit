<?php

namespace Auto\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FieldTypesToFieldOptions
 *
 * @ORM\Table(name="field_types_to_field_options")
 * @ORM\Entity
 */
class FieldTypesToFieldOptions
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
     * @var \FieldOptions
     *
     * @ORM\ManyToOne(targetEntity="FieldOptions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="field_options_id", referencedColumnName="id")
     * })
     */
    private $fieldOptions;

    /**
     * @var \FieldTypes
     *
     * @ORM\ManyToOne(targetEntity="FieldTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="field_types_id", referencedColumnName="id")
     * })
     */
    private $fieldTypes;



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
     * Set fieldOptions
     *
     * @param \Auto\CoreBundle\Entity\FieldOptions $fieldOptions
     * @return FieldTypesToFieldOptions
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

    /**
     * Set fieldTypes
     *
     * @param \Auto\CoreBundle\Entity\FieldTypes $fieldTypes
     * @return FieldTypesToFieldOptions
     */
    public function setFieldTypes(\Auto\CoreBundle\Entity\FieldTypes $fieldTypes = null)
    {
        $this->fieldTypes = $fieldTypes;
    
        return $this;
    }

    /**
     * Get fieldTypes
     *
     * @return \Auto\CoreBundle\Entity\FieldTypes 
     */
    public function getFieldTypes()
    {
        return $this->fieldTypes;
    }
}