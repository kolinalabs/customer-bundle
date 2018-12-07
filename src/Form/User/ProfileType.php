<?php

namespace Kolina\CustomerBundle\Form\User;

use FOS\UserBundle\Form\Type\ProfileFormType;
use Symfony\Component\Form\AbstractType;

class ProfileType extends AbstractType
{
    /**
     * @inheritDoc
     */
    public function getParent()
    {
        return ProfileFormType::class;
    }
}
