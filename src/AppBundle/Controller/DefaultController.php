<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
<<<<<<< HEAD
    
=======
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        //
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }
>>>>>>> 306e9f5b2272882b803997ee2fa501a62420808f
}

