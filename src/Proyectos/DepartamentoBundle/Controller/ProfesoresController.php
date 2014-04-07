<?php

namespace Proyectos\DepartamentoBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Proyectos\DepartamentoBundle\Entity\Profesor;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfesoresController extends Controller
{
    public function indexAction()
    {
        $profesores = $this->getDoctrine()->getRepository('ProyectosDepartamentoBundle:Profesor')->findAll();

        return $this->render('ProyectosDepartamentoBundle:Profesores:index.html.twig', array('datos' => $profesores));

    }

}
