<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name = "user")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\Column(type = "integer")
     * @ORM\GeneratedValue(strategy = "AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type = "string", length = 255)
     *
     * @Assert\NotBlank(groups = {"registration", "authorization"})
     * @Assert\Email(groups = {"registration", "authorization"})
     * @Assert\Length(max = 255, maxMessage = "Max Length 255", groups = {"registration", "authorization"})
     */
    protected $email;

    /**
     * @ORM\Column(type = "string", length = 255)
     *
     * @Assert\NotBlank(groups = {"registration", "authorization"})
     * @Assert\Length(max = 255, maxMessage = "Max Length 255", groups = {"registration", "authorization"})
     */
    protected $password;

    /**
     * @ORM\Column(type = "string", length = 255)
     *
     * @Assert\NotBlank(groups = {"registration"})
     * @Assert\Length(max = 255, maxMessage = "Max Length 255", groups = {"registration"})
     */
    protected $name;

    /**
     * @ORM\Column(type = "datetime")
     */
    protected $created;

    /**
     * @ORM\Column(type = "datetime")
     */
    protected $updated;

    /**
     * @ORM\Column(type = "boolean")
     */
    protected $enabled;

    /**
     * @ORM\Column(type = "string", length = 255)
     *
     * @Assert\Length(max = 255, maxMessage = "Max Length 255")
     */
    protected $token;

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
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return User
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
     * Set created
     *
     * @param \DateTime $created
     * @return User
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return User
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return User
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return User
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }
}
