<?php

namespace AppBundle\Entity;

/**
 * Training
 */
class Training
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string|null
     */
    private $goal;

    /**
     * @var string|null
     */
    private $content;

    /**
     * @var \DateTime
     */
    private $start_date;

    /**
     * @var \DateTime
     */
    private $end_date;

    /**
     * @var string
     */
    private $place;

    /**
     * @var \DateTime
     */
    private $start_hour;

    /**
     * @var \DateTime
     */
    private $end_hour;

    /**
     * @var string
     */
    private $contact_phone;

    /**
     * @var string
     */
    private $contact_email;

    /**
     * @var string|null
     */
    private $target;


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
     * Set name.
     *
     * @param string $name
     *
     * @return Training
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
     * Set goal.
     *
     * @param string|null $goal
     *
     * @return Training
     */
    public function setGoal($goal = null)
    {
        $this->goal = $goal;

        return $this;
    }

    /**
     * Get goal.
     *
     * @return string|null
     */
    public function getGoal()
    {
        return $this->goal;
    }

    /**
     * Set content.
     *
     * @param string|null $content
     *
     * @return Training
     */
    public function setContent($content = null)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content.
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set startDate.
     *
     * @param \DateTime $startDate
     *
     * @return Training
     */
    public function setStartDate($startDate)
    {
        $this->start_date = $startDate;

        return $this;
    }

    /**
     * Get startDate.
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * Set endDate.
     *
     * @param \DateTime $endDate
     *
     * @return Training
     */
    public function setEndDate($endDate)
    {
        $this->end_date = $endDate;

        return $this;
    }

    /**
     * Get endDate.
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * Set place.
     *
     * @param string $place
     *
     * @return Training
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place.
     *
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set startHour.
     *
     * @param \DateTime $startHour
     *
     * @return Training
     */
    public function setStartHour($startHour)
    {
        $this->start_hour = $startHour;

        return $this;
    }

    /**
     * Get startHour.
     *
     * @return \DateTime
     */
    public function getStartHour()
    {
        return $this->start_hour;
    }

    /**
     * Set endHour.
     *
     * @param \DateTime $endHour
     *
     * @return Training
     */
    public function setEndHour($endHour)
    {
        $this->end_hour = $endHour;

        return $this;
    }

    /**
     * Get endHour.
     *
     * @return \DateTime
     */
    public function getEndHour()
    {
        return $this->end_hour;
    }

    /**
     * Set contactPhone.
     *
     * @param string $contactPhone
     *
     * @return Training
     */
    public function setContactPhone($contactPhone)
    {
        $this->contact_phone = $contactPhone;

        return $this;
    }

    /**
     * Get contactPhone.
     *
     * @return string
     */
    public function getContactPhone()
    {
        return $this->contact_phone;
    }

    /**
     * Set contactEmail.
     *
     * @param string $contactEmail
     *
     * @return Training
     */
    public function setContactEmail($contactEmail)
    {
        $this->contact_email = $contactEmail;

        return $this;
    }

    /**
     * Get contactEmail.
     *
     * @return string
     */
    public function getContactEmail()
    {
        return $this->contact_email;
    }

    /**
     * Set target.
     *
     * @param string|null $target
     *
     * @return Training
     */
    public function setTarget($target = null)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Get target.
     *
     * @return string|null
     */
    public function getTarget()
    {
        return $this->target;
    }

    public function __toString() {
        if(is_null($this->name)) {
            return 'NULL';
        }
        return $this->name;
    }
}
