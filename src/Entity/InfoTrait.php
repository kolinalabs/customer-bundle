<?php

namespace Kolina\CustomerBundle\Entity;

trait InfoTrait
{
    /**
     * @var CustomerInterface
     */
    protected $info;

    /**
     * @return CustomerInterface
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->info->getFirstname();
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->info->getLastname();
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->info->getName();
    }

    /**
     * @return string
     */
    public function getDocument()
    {
        return $this->info->getDocument();
    }

    /**
     * @return string
     */
    public function getInfoEmail()
    {
        return $this->info->getEmail();
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->info->getWebsite();
    }

    /**
     * @return string
     */
    public function getMobile()
    {
        return $this->info->getMobile();
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->info->getPhone();
    }

    /**
     * @return string
     */
    public function getFax()
    {
        return $this->info->getFax();
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->info->getCountry();
    }

    /**
     * @return string
     */
    public function getPostcode()
    {
        return $this->info->getPostcode();
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->info->getState();
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->info->getCity();
    }

    /**
     * @return string
     */
    public function getDistrict()
    {
        return $this->info->getDistrict();
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->info->getStreet();
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->info->getNumber();
    }

    /**
     * @return string
     */
    public function getComplement()
    {
        return $this->info->getComplement();
    }
}
