<?php

namespace Pixellary\TaskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Pixellary\TaskBundle\Entity\Task;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PXTasksBundle:Default:index.html.twig', array());
    }

    public function taskListAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $tasks = $em->getRepository('PXTasksBundle:Task')->findAll();

        return $this->render('PXTasksBundle::taskList.html.twig', array( 'tasks'=> $tasks ));
    }

    public function taskFormAction()
    {
        //$request = $this->getRequest();

        $task = new Task();
        $task->setTaskDeadline(new \DateTime('first day of next month'));

        $form = $this->createFormBuilder($task)
            ->add('taskCode')
            ->add('taskName')
            ->add('taskDesc', 'textarea')
            ->add('taskDeadline', 'date')
            ->getForm();
        return $this->render(
            'PXTasksBundle::taskForm.html.twig',
            array('form' => $form->createView())
        );

    }


}
