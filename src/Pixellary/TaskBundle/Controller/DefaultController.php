<?php

namespace Pixellary\TaskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Pixellary\TaskBundle\Entity\Task;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PXTasksBundle:Default:index.html.twig', array());
    }

    public function taskListAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tasks = $em->getRepository('PXTasksBundle:Task')->findAll();

        return $this->render('PXTasksBundle::taskList.html.twig', array( 'tasks'=> $tasks ));
    }

    public function taskFormAction()
    {
        $request = $this->getRequest();

        $task = new Task();
        $task->setTaskDeadline(new \DateTime('first day of next month'));

        $form = $this->createFormBuilder($task)
            ->add('taskCode')
            ->add('taskName')
            ->add('taskDesc', 'textarea')
            ->add('taskDeadline', 'date')
            ->add('taskProgress', 'integer')
            ->getForm();

        if ($request->getMethod() == 'POST') {

            $form->bind($request);
            if ($form->isValid()) {

                $em = $this->getDoctrine()->getManager();

                $em->persist($task);

                $tasks = $em->getRepository('PXTasksBundle:Task')->findAll();

                $em->flush();

                $this->get('session')->getFlashBag()->add('notice', 'SUCCESS!');

                return $this->redirect($this->generateUrl('taskList'));

            }

        }

        return $this->render('PXTasksBundle::taskForm.html.twig',array('form' => $form->createView()) );
    }


}
