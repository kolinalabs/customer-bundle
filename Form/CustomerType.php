<?php

namespace Kolina\CustomerBundle\Form;

use Kolina\CustomerBundle\Form\User\ProfileType;
use Kolina\CustomerBundle\Form\User\RegistrationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

abstract class CustomerType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('document')
            ->add('email')
            ->add('website')
            ->add('mobile')
            ->add('phone')
            ->add('fax')
            ->add('country')
            ->add('postcode')
            ->add('state')
            ->add('city')
            ->add('district')
            ->add('street')
            ->add('number')
            ->add('complement')
        ;

        if(class_exists('FOS\UserBundle\FOSUserBundle')){

            /**
             * If the form corresponds to a collection element,
             * can not be the [data] in $options, because collections can be added dynamically.
             * This note refers to a situation similar to this
             * http://symfony.com/doc/current/cookbook/form/form_collections.html
             */
            $customer = array_key_exists('data', $options) ? $options['data'] : false ;

            $userType = $customer && $customer->getId() ? ProfileType::class : RegistrationType::class ;

            $builder
                ->add('user', $userType)
            ;
        }
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Kolina\CustomerBundle\Entity\Customer'
        ));
    }
}