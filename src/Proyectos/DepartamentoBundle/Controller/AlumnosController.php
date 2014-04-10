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

    public function detalleAlumnoAction($id){

        $alumno = $this->getDoctrine()->getRepository('ProyectosDepartamentoBundle:Alumno')->find($id);
        return $this->render('ProyectosDepartamentoBundle:Alumnos:detalle.html.twig', array('alumno' => $alumno));

    }

    public function eliminarAlumnoGetAction($id){

        $alumno = $this->getDoctrine()->getRepository('ProyectosDepartamentoBundle:Alumno')->find($id);
        return $this->render('ProyectosDepartamentoBundle:Alumnos:eliminar.html.twig', array('alumno' => $alumno));
    }


    public function eliminarAlumnoPostAction($id){
        $alumno = $this->getDoctrine()->getRepository('ProyectosDepartamentoBundle:Alumno')->find($id);
        $el = $this->getDoctrine()->getManager();
        $el->remove($alumno);
        $el->flush();
        return $this->redirect("/alumnos/");
    }

    public function anadirAlumnoGetAction(){

            return $this->render('ProyectosDepartamentoBundle:Profesores:anadir.html.twig');
    }


    public function modificarAlumnoAction(){

    }


}
