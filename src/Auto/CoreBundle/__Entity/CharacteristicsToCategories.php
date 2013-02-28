<?php

namespace Auto\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacteristicsToCategories
 *
 * @ORM\Table(name="characteristics_to_categories")
 * @ORM\Entity
 */
class CharacteristicsToCategories
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
     * @var \Categories
     *
     * @ORM\ManyToOne(targetEntity="Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categories_id", referencedColumnName="id")
     * })
     */
    private $categories;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set categories
     *
     * @param \Auto\CoreBundle\Entity\Categories $categories
     * @return CharacteristicsToCategories
     */
    public function setCategories(\Auto\CoreBundle\Entity\Categories $categories = null)
    {
        $this->categories = $categories;
    
        return $this;
    }

    /**
     * Get categories
     *
     * @return \Auto\CoreBundle\Entity\Categories 
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Set characteristics
     *
     * @param \Auto\CoreBundle\Entity\Characteristics $characteristics
     * @return CharacteristicsToCategories
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
}