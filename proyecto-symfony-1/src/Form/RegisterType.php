<?php

namespace App\Form;

use Spipu\Html2Pdf\Tag\Html\Sub;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class, [
            'label' => 'Nombre'
        ]);
        $builder->add('surname', TextType::class, [
            'label' => 'Apellidos'
        ]);
        $builder->add('email', EmailType::class, [
            'label' => 'Correo Electronico'
        ]);
        $builder->add('password', PasswordType::class, [
            'label' => 'Contraseña'
        ]);
        $builder->add('submit', SubmitType::class, [
            'label' => 'Registrarse'
        ]);
    }
}