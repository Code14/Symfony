<?php

namespace Proyectos\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProyectosPruebaBundle:Default:index.html.twig');
    }
}
