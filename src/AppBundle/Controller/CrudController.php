<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CrudController extends Controller
{
    /**
     * @Route("/crud", name="crud")
     */
    public function listAction()
    {
        return $this->render('crud/index.html.twig');
    }
     /**
     * @Route("/crud/create", name="crud_create")
     */
    public function createAction(Request $request)
    {
        return $this->render('crud/create.html.twig');
    }
     /**
     * @Route("/crud/edit/{id}", name="crud_edit")
     */
    public function editAction($id, Request $request)
    {
        return $this->render('crud/edit.html.twig');
    }
     /**
     * @Route("/crud/details/{id}", name="crud_details")
     */
    public function detailsAction ($id)
    {
        return $this->render('crud/details.html.twig');
    }
}
