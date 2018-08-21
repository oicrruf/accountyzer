<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Contact
 * 
 * @ORM\Entity()
 * @ORM\HasLifecycleCallbacks()
 */

class Contact
{
    /**
     * @var string
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @var string
     * @Assert\Email(
     *     checkMX = true
     * )
     */
    private $email;

    /**
     * @var string|null
     * @Assert\Length(
     *      min = 8
     * )
     */
    private $phone;

    /**
     * @var string
     * @Assert\NotBlank()
     */
    private $message;

    /**
     * @var int
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Service
     */
    private $interest;

    /**
     * @var bool|null
     */
    private $answered;

    /**
     * @var \DateTime
     * 
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;


    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Contact
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
     * Set email.
     *
     * @param string $email
     *
     * @return Contact
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone.
     *
     * @param string|null $phone
     *
     * @return Contact
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

    /**
     * Set message.
     *
     * @param string $message
     *
     * @return Contact
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
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
     * Set interest.
     *
     * @param \AppBundle\Entity\Service|null $interest
     *
     * @return Contact
     */
    public function setInterest(\AppBundle\Entity\Service $interest = null)
    {
        $this->interest = $interest;

        return $this;
    }

    /**
     * Get interest.
     *
     * @return \AppBundle\Entity\Service|null
     */
    public function getInterest()
    {
        return $this->interest;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime $createdAt
     *
     * @return Contact
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt.
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        $this->createdAt = new \DateTime();
    }

    /**
     * Set answered.
     *
     * @param bool|null $answered
     *
     * @return Contact
     */
    public function setAnswered($answered = null)
    {
        $this->answered = $answered;

        return $this;
    }

    /**
     * Get answered.
     *
     * @return bool|null
     */
    public function getAnswered()
    {
        return $this->answered;
    }
}
