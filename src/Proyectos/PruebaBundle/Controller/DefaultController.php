<?php

namespace Proyectos\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ProyectosPruebaBundle:Default:index.html.twig', array('name' => $name));
    }
}
