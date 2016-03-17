<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Todo;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class TodoController extends Controller
{
    /**
     * @Route("/", name="todo")
     */
    public function listAction()
    {
        $todos = $this->getDoctrine()
            ->getRepository('AppBundle:Todo')
            ->findAll();

        return $this->render('todo/index.html.twig', array(
                'todos' => $todos
            ));
    }
     /**
     * @Route("/todo/create", name="todo_create")
     */
    public function createAction(Request $request)
    {
        $todo = new Todo;

        $form = $this->createFormBuilder($todo)
            ->add('name', TextType::class, array('attr' => array('class'=> 'form-control', 'style' =>'marigin-bottom:15px')))
            ->add('category', TextType::class, array('attr' => array('class'=> 'form-control', 'style' =>'marigin-bottom:15px')))
            ->add('description', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style' =>'marigin-bottom:15px')))
            ->add('priority', ChoiceType::class,  array('choices' => array('Low' => 'Low','Normal'=>'Normal','High'=>'High'), 'attr' => array('class'=> 'form-control', 'style' =>'marigin-bottom:15px')))
            ->add('due_date', DateTimeType::class, array('attr' => array('class'=> 'form-control', 'style' =>'marigin-bottom:15px')))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isVaild())
        {
            die('OK');
        }           
        return $this->render('todo/create.html.twig');
    }
     /**
     * @Route("/todo/edit/{id}", name="todo_edit")
     */
    public function editAction($id, Request $request)
    {
        return $this->render('todo/edit.html.twig');
    }
     /**
     * @Route("/todo/details/{id}", name="todo_details")
     */
    public function detailsAction ($id)
    {
        return $this->render('todo/details.html.twig');
    }
}
