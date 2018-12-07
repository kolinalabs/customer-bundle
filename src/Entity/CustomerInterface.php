<?php

namespace Kolina\CustomerBundle\Entity;

use FOS\UserBundle\Model\UserInterface;

interface CustomerInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @param $firstname
     * @return CustomerInterface
     */
    public function setFirstname($firstname);

    /**
     * @return string
     */
    public function getFirstname();

    /**
     * @param $lastname
     * @return CustomerInterface
     */
    public function setLastname($lastname);

    /**
     * @return string
     */
    public function getLastname();

    /**
     * @return string
     */
    public function getName();

    /**
     * @param $document
     * @return CustomerInterface
     */
    public function setDocument($document);

    /**
     * @return string
     */
    public function getDocument();

    /**
     * @param $email
     * @return CustomerInterface
     */
    public function setEmail($email);

    /**
     * @return string
     */
    public function getEmail();

    /**
     * @param $website
     * @return CustomerInterface
     */
    public function setWebsite($website);

    /**
     * @return string
     */
    public function getWebsite();

    /**
     * @param $mobile
     * @return CustomerInterface
     */
    public function setMobile($mobile);

    /**
     * @return string
     */
    public function getMobile();

    /**
     * @param $phone
     * @return CustomerInterface
     */
    public function setPhone($phone);

    /**
     * @return string
     */
    public function getPhone();

    /**
     * @param $fax
     * @return CustomerInterface
     */
    public function setFax($fax);

    /**
     * @return string
     */
    public function getFax();

    /**
     * @param $country
     * @return CustomerInterface
     */
    public function setCountry($country);

    /**
     * @return string
     */
    public function getCountry();

    /**
     * @param $postcode
     * @return CustomerInterface
     */
    public function setPostcode($postcode);

    /**
     * @return string
     */
    public function getPostcode();

    /**
     * @param $state
     * @return CustomerInterface
     */
    public function setState($state);

    /**
     * @return string
     */
    public function getState();

    /**
     * @param $city
     * @return CustomerInterface
     */
    public function setCity($city);

    /**
     * @return string
     */
    public function getCity();

    /**
     * @param $district
     * @return CustomerInterface
     */
    public function setDistrict($district);

    /**
     * @return string
     */
    public function getDistrict();

    /**
     * @param $street
     * @return CustomerInterface
     */
    public function setStreet($street);

    /**
     * @return string
     */
    public function getStreet();

    /**
     * @param $number
     * @return CustomerInterface
     */
    public function setNumber($number);

    /**
     * @return string
     */
    public function getNumber();

    /**
     * @param $complement
     * @return CustomerInterface
     */
    public function setComplement($complement);

    /**
     * @return string
     */
    public function getComplement();

    /**
     * @param UserInterface $user
     * @return CustomerInterface
     */
    public function setUser(UserInterface $user);

    /**
     * @return UserInterface
     */
    public function getUser();

    /**
     * @return \DateTime
     */
    public function getCreatedAt();

    /**
     * @return \DateTime
     */
    public function getUpdatedAt();

    /**
     * @return CustomerInterface
     */
    public function prePersist();

    /**
     * @return CustomerInterface
     */
    public function preUpdate();
}
