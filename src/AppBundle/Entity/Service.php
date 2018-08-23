<?php

namespace AppBundle\Entity;

/**
 * Service
 */
class Service
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string
     */
    private $icon;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var int
     */
    private $id;


    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Service
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description.
     *
     * @param string|null $description
     *
     * @return Service
     */
    public function setDescription($description = null)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set icon.
     *
     * @param string $icon
     *
     * @return Service
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon.
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set slug.
     *
     * @param string $slug
     *
     * @return Service
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug.
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function __toString() {
        if(is_null($this->name)) {
            return 'NULL';
        }
        return $this->name;
    }
}
