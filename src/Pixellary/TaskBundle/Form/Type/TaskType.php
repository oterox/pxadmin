<?php

namespace Pixellary\TaskBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('taskCode')
                ->add('taskName')
                ->add('taskDesc', 'textarea')
                ->add('taskDeadline', 'date')
                ->add('taskProgress', 'percent', array('type' => 'integer' ))
        ;
    }

    public function getName()
    {
        return 'task';
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Pixellary\TaskBundle\Entity\Task',
        );
    }

}

