<?php

namespace Kolina\CustomerBundle\Entity;

use FOS\UserBundle\Model\UserInterface;

trait UserTrait
{
    /**
     * @var UserInterface
     */
    protected $user;

    /**
     * @return UserInterface
     */
    public function getUser()
    {
        return $this->user;
    }

    public function getUsername()
    {
        return $this->user->getUsername();
    }
}
