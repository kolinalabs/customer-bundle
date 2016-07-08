<?php

namespace Kolina\CustomerBundle\Entity;

use FOS\UserBundle\Model\UserInterface;

/**
 * Customer
 */
abstract class Customer implements CustomerInterface
{
    /**
     * @var string
     */
    protected $firstname;

    /**
     * @var string
     */
    protected $lastname;

    /**
     * @var string
     */
    protected $document;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $website;

    /**
     * @var string
     */
    protected $mobile;

    /**
     * @var string
     */
    protected $phone;

    /**
     * @var string
     */
    protected $fax;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    protected $postcode;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var string
     */
    protected $city;

    /**
     * @var string
     */
    protected $district;

    /**
     * @var string
     */
    protected $street;

    /**
     * @var string
     */
    protected $number;

    /**
     * @var UserInterface
     */
    protected $user;

    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @var \DateTime
     */
    protected $updatedAt;

    /**
     * @inheritDoc
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @inheritDoc
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @inheritDoc
     */
    public function setDocument($document)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @inheritDoc
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @inheritDoc
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @inheritDoc
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @inheritDoc
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @inheritDoc
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @inheritDoc
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCountry()
    {
        return $this->country;
    }


    /**
     * @inheritDoc
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @inheritDoc
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @inheritDoc
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @inheritDoc
     */
    public function setDistrict($district)
    {
        $this->district = $district;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * @inheritDoc
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @inheritDoc
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @inheritDoc
     */
    public function setUser(UserInterface $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @inheritDoc
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @inheritDoc
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @inheritDoc
     */
    public function prePersist()
    {
        $this->createdAt = new \DateTime;
        $this->updatedAt = new \DateTime;
    }

    /**
     * @inheritDoc
     */
    public function preUpdate()
    {
        $this->updatedAt = new \DateTime;
    }
}
