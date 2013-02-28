<?php

namespace Auto\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FieldTypes
 *
 * @ORM\Table(name="field_types")
 * @ORM\Entity
 */
class FieldTypes
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
     * @var \FieldsGroup
     *
     * @ORM\ManyToOne(targetEntity="FieldsGroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fields_group_id", referencedColumnName="id")
     * })
     */
    private $fieldsGroup;



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
     * @return FieldTypes
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
     * Set fieldsGroup
     *
     * @param \Auto\CoreBundle\Entity\FieldsGroup $fieldsGroup
     * @return FieldTypes
     */
    public function setFieldsGroup(\Auto\CoreBundle\Entity\FieldsGroup $fieldsGroup = null)
    {
        $this->fieldsGroup = $fieldsGroup;
    
        return $this;
    }

    /**
     * Get fieldsGroup
     *
     * @return \Auto\CoreBundle\Entity\FieldsGroup 
     */
    public function getFieldsGroup()
    {
        return $this->fieldsGroup;
    }
}