<?php

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Expose;

/**
 * Common functionality for all entities
 *
 * @package AppBundle\Entity
 * @ORM\MappedSuperclass
 * @ORM\HasLifecycleCallbacks
 */
abstract class BaseEntity {


    /**
     *
     * Date/Time in which the Object is created
     * @var \DateTime
     *
     * @ORM\Column(name="CreatedOnDateTime", type="datetime", nullable=false)
     * @Expose
     */
    private $createdondatetime;

    /**
     * Who created this Object - Online/iPhone/iPad/Android/etc.?
     * @var integer
     *
     * @ORM\Column(name="CreatedByType", type="integer", nullable=false)
     * @Expose
     */
    private $createdbytype;

    /**
     * User that created this object
     *
     * @var integer
     *
     * @ORM\Column(name="CreatedByID", type="integer", nullable=true)
     * @Expose
     */
    private $createdbyid;


  

    /**
     * Set createdondatetime
     *
     * @param \DateTime $createdondatetime
     * @return SettingsTitles
     */
    public function setCreatedondatetime($createdondatetime)
    {
        $this->createdondatetime = $createdondatetime;

        return $this;
    }

    /**
     * Get createdondatetime
     *
     * @return \DateTime
     */
    public function getCreatedondatetime()
    {
        return $this->createdondatetime;
    }

    /**
     * Set createdbytype
     *
     * @param integer $createdbytype
     * @return SettingsTitles
     */
    public function setCreatedbytype($createdbytype)
    {
        $this->createdbytype = $createdbytype;

        return $this;
    }

    /**
     * Get createdbytype
     *
     * @return integer
     */
    public function getCreatedbytype()
    {
        return $this->createdbytype;
    }

    /**
     * Set createdbyid
     *
     * @param integer $createdbyid
     * @return SettingsTitles
     */
    public function setCreatedbyid($createdbyid)
    {
        $this->createdbyid = $createdbyid;

        return $this;
    }

    /**
     * Get createdbyid
     *
     * @return integer
     */
    public function getCreatedbyid()
    {
        return $this->createdbyid;
    }

}
