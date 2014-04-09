<?php

namespace Proyectos\DepartamentoBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Proyectos\DepartamentoBundle\Entity\Alumno;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlumnosController extends Controller
{
    public function indexAction()
    {
        $alumnos = $this->getDoctrine()->getRepository('ProyectosDepartamentoBundle:Alumno')->findAll();

        // Nombre del array con el que pasamos los datos a la plantilla twig
        return $this->render('ProyectosDepartamentoBundle:Alumnos:index.html.twig', array('data' => $alumnos));
    }

    public function detalleAlumno(){

    }

    public function añadirAlumno(){

    }

    public function eliminarAlumno(){

    }

    public function modificarAlumno(){

    }


}
