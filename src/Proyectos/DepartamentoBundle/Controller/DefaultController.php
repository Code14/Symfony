<?php

namespace Proyectos\DepartamentoBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Proyectos\DepartamentoBundle\Entity\Alumno;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        return $this->render('ProyectosDepartamentoBundle:Default:index.html.twig');

    }


}
