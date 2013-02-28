<?php

namespace Auto\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Characteristics
 *
 * @ORM\Table(name="characteristics")
 * @ORM\Entity
 */
class Characteristics
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
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

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
     * @var \CharacteristicsGroup
     *
     * @ORM\ManyToOne(targetEntity="CharacteristicsGroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="characteristics_group_id", referencedColumnName="id")
     * })
     */
    private $characteristicsGroup;

    /**
     * @var \Characteristics
     *
     * @ORM\ManyToOne(targetEntity="Characteristics")
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
     * Set name
     *
     * @param string $name
     * @return Characteristics
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
     * Set description
     *
     * @param string $description
     * @return Characteristics
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set fieldTypes
     *
     * @param \Auto\CoreBundle\Entity\FieldTypes $fieldTypes
     * @return Characteristics
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

    /**
     * Set characteristicsGroup
     *
     * @param \Auto\CoreBundle\Entity\CharacteristicsGroup $characteristicsGroup
     * @return Characteristics
     */
    public function setCharacteristicsGroup(\Auto\CoreBundle\Entity\CharacteristicsGroup $characteristicsGroup = null)
    {
        $this->characteristicsGroup = $characteristicsGroup;
    
        return $this;
    }

    /**
     * Get characteristicsGroup
     *
     * @return \Auto\CoreBundle\Entity\CharacteristicsGroup 
     */
    public function getCharacteristicsGroup()
    {
        return $this->characteristicsGroup;
    }

    /**
     * Set parent
     *
     * @param \Auto\CoreBundle\Entity\Characteristics $parent
     * @return Characteristics
     */
    public function setParent(\Auto\CoreBundle\Entity\Characteristics $parent = null)
    {
        $this->parent = $parent;
    
        return $this;
    }

    /**
     * Get parent
     *
     * @return \Auto\CoreBundle\Entity\Characteristics 
     */
    public function getParent()
    {
        return $this->parent;
    }
}