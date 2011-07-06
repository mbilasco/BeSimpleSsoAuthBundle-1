<?php

namespace BeSimple\SsoAuthBundle\Tests\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class LoginType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('username', 'text');
        $builder->add('password', 'password');
    }
}