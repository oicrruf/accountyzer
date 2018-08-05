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
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Service
     */
    private $service;


    /**
     * Set name
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
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return ServiceDetail
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     * Set service
     *
     * @param \AppBundle\Entity\Service $service
     *
     * @return ServiceDetail
     */
    public function setService(\AppBundle\Entity\Service $service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return \AppBundle\Entity\Service
     */
    public function getService()
    {
        return $this->service;
    }
}

