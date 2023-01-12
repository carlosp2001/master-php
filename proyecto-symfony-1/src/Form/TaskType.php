<?php

namespace App\Form;

use Spipu\Html2Pdf\Tag\Html\Sub;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', TextType::class, [
            'label' => 'Titulo'
        ]);
        $builder->add('content', TextareaType::class, [
            'label' => 'Contenido'
        ]);
        $builder->add('priority', ChoiceType::class, [
            'label' => 'Prioridad',
            'choices' => [
                'Alta' => 'high',
                'Media' => 'medium',
                'Baja' => 'low'
                ]
        ]);
        $builder->add('hours', TextType::class, [
            'label' => 'Horas presupuestadas'
        ]);
        $builder->add('submit', SubmitType::class, [
            'label' => 'Registrarse'
        ]);
    }
}