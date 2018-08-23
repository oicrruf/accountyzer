<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiceDetail
 *
 * @ORM\Table(name="ServiceDetail")
 * @ORM\Entity
 */
class ServiceDetail
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text", nullable=false, unique=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Service
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Service")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="service_id", referencedColumnName="id")
     * })
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
