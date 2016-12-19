<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
//use Symfony\Component\Form\Extension\Core\Type\EmailType;
//use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use AppBundle\Entity\User;

class AuthorizationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')//, EmailType::class, array('attr' => array('name' => '_username', 'placeholder' => 'E-mail')))
            ->add('password');//, TextType::class, array('attr' => array('name' => '_password')));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => User::class, 'validation_groups' => ['authorization']]);
    }
}
