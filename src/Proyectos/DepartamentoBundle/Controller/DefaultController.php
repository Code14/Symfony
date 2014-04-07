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

    public function mostrarTodosAction(){
        $alumnos = $this->getDoctrine()->getRepository('ProyectosDepartamentoBundle:Alumno')->findAll();

        // Nombre del array con el que pasamos los datos a la plantilla twig
        return $this->render('ProyectosDepartamentoBundle:Default:index.html.twig', array('data' => $alumnos));

    }

}
