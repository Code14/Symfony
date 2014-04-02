<?php

namespace Proyectos\DepartamentoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProyectosDepartamentoBundle:Default:index.html.twig');
    }
}
