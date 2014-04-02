<?php

namespace Proyectos\DepartamentoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ProyectosDepartamentoBundle:Default:index.html.twig', array('name' => $name));
    }

    public function pruebaAction(asdsa){}
}
