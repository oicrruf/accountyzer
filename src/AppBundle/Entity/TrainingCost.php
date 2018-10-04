<?php

namespace AppBundle\Entity;

/**
 * TrainingCost
 */
class TrainingCost
{
    /**
     * @var string
     */
    private $cost;

    /**
     * @var string|null
     */
    private $detail;

    /**
     * @var int
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Training
     */
    private $training;


    /**
     * Set cost.
     *
     * @param string $cost
     *
     * @return TrainingCost
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost.
     *
     * @return string
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set detail.
     *
     * @param string|null $detail
     *
     * @return TrainingCost
     */
    public function setDetail($detail = null)
    {
        $this->detail = $detail;

        return $this;
    }

    /**
     * Get detail.
     *
     * @return string|null
     */
    public function getDetail()
    {
        return $this->detail;
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
     * Set training.
     *
     * @param \AppBundle\Entity\Training|null $training
     *
     * @return TrainingCost
     */
    public function setTraining(\AppBundle\Entity\Training $training = null)
    {
        $this->training = $training;

        return $this;
    }

    /**
     * Get training.
     *
     * @return \AppBundle\Entity\Training|null
     */
    public function getTraining()
    {
        return $this->training;
    }
}
