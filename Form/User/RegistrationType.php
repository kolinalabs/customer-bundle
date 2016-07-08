<?php

namespace Kolina\CustomerBundle\Form\User;

use FOS\UserBundle\Form\Type\RegistrationFormType;
use Symfony\Component\Form\AbstractType;

class RegistrationType extends AbstractType
{
    /**
     * @inheritDoc
     */
    public function getParent()
    {
        return RegistrationFormType::class;
    }

}