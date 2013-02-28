<?php

namespace Auto\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FieldOptions
 *
 * @ORM\Table(name="field_options")
 * @ORM\Entity
 */
class FieldOptions
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
     * @return FieldOptions
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
     * Set systemTypes
     *
     * @param \Auto\CoreBundle\Entity\SystemTypes $systemTypes
     * @return FieldOptions
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