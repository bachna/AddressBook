<?php

namespace ContactsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        return $this->render('ContactsBundle:Default:index.html.twig');
    }

    /**
     * @Route("/", name="groups")
     */
    public function showGroupsAction()
    {
        return $this->render('ContactsBundle:Groups:groups.html.twig');
    }

    /**
     * @Route("/form", name="frm")
     */
    public function addPersonAction()
    {
        return $this->render('ContactsBundle:Person:form.html.twig');
    }

    /**
     * @Route("/")
     */
    public function showAllAction()
    {

    }

    /**
     * @Route("/")
     */
    public function searchAction()
    {

    }

    /**
     * @Route("/")
     */
    public function deletePersonAction()
    {

    }
}
