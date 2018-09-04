<?php

namespace AppBundle\Entity;

/**
 * Information
 */
class Information
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $about_us;

    /**
     * @var string|null
     */
    private $vision;

    /**
     * @var string|null
     */
    private $mission;

    /**
     * @var string|null
     */
    private $address;

    /**
     * @var string|null
     */
    private $city;

    /**
     * @var string|null
     */
    private $state;

    /**
     * @var string|null
     */
    private $map;

    /**
     * @var string|null
     */
    private $phone;


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
     * Set aboutUs.
     *
     * @param string|null $aboutUs
     *
     * @return Information
     */
    public function setAboutUs($aboutUs = null)
    {
        $this->about_us = $aboutUs;

        return $this;
    }

    /**
     * Get aboutUs.
     *
     * @return string|null
     */
    public function getAboutUs()
    {
        return $this->about_us;
    }

    /**
     * Set vision.
     *
     * @param string|null $vision
     *
     * @return Information
     */
    public function setVision($vision = null)
    {
        $this->vision = $vision;

        return $this;
    }

    /**
     * Get vision.
     *
     * @return string|null
     */
    public function getVision()
    {
        return $this->vision;
    }

    /**
     * Set mission.
     *
     * @param string|null $mission
     *
     * @return Information
     */
    public function setMission($mission = null)
    {
        $this->mission = $mission;

        return $this;
    }

    /**
     * Get mission.
     *
     * @return string|null
     */
    public function getMission()
    {
        return $this->mission;
    }

    /**
     * Set address.
     *
     * @param string|null $address
     *
     * @return Information
     */
    public function setAddress($address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address.
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set city.
     *
     * @param string|null $city
     *
     * @return Information
     */
    public function setCity($city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city.
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set state.
     *
     * @param string|null $state
     *
     * @return Information
     */
    public function setState($state = null)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state.
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set map.
     *
     * @param string|null $map
     *
     * @return Information
     */
    public function setMap($map = null)
    {
        $this->map = $map;

        return $this;
    }

    /**
     * Get map.
     *
     * @return string|null
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * Set phone.
     *
     * @param string|null $phone
     *
     * @return Information
     */
    public function setPhone($phone = null)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone.
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

}