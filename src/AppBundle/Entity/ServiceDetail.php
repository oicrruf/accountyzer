<?php

namespace AppBundle\Entity;

/**
 * ServiceDetail
 */
class ServiceDetail
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Service
     */
    private $service;


    /**
     * Set name.
     *
     * @param string $name
     *
     * @return ServiceDetail
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
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set service.
     *
     * @param \AppBundle\Entity\Service|null $service
     *
     * @return ServiceDetail
     */
    public function setService(\AppBundle\Entity\Service $service = null)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service.
     *
     * @return \AppBundle\Entity\Service|null
     */
    public function getService()
    {
        return $this->service;
    }

    public function __toString() {
        if(is_null($this->name)) {
            return 'NULL';
        }
        return $this->name;
    }
}
