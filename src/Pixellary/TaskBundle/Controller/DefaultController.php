<?php

namespace Pixellary\TaskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

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

        return $this->render('PXTasksBundle::taskInsert.html.twig', array( 'tasks'=> $tasks ));
    }

    public function taskFormAction()
    {
        return $this->render('PXTasksBundle::taskForm.html.twig', array());
    }

}
