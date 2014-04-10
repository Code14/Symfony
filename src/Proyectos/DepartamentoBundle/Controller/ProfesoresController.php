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

        return $this->render('ProyectosDepartamentoBundle:Profesores:index.html.twig', array('profesores' => $profesores));

    }

    public function detalleProfesorAction($id)
    {
        $profesor = $this->getDoctrine()->getRepository('ProyectosDepartamentoBundle:Profesor')->find($id);

        return $this->render('ProyectosDepartamentoBundle:Profesores:detalle.html.twig', array('profesor' => $profesor));
    }

    public function eliminarProfesorGetAction($id){

        $profesor = $this->getDoctrine()->getRepository('ProyectosDepartamentoBundle:Profesor')->find($id);

        return $this->render('ProyectosDepartamentoBundle:Profesores:eliminar.html.twig', array('profesor' => $profesor));
    }

    public function eliminarProfesorPostAction($id){
        $profesor = $this->getDoctrine()->getRepository('ProyectosDepartamentoBundle:Profesor')->find($id);
        $el = $this->getDoctrine()->getManager();
        $el->remove($profesor);
        $el->flush();
        return $this->redirect("/profesores/");
    }

    public function anadirProfesorGetAction(){
        return $this->render('ProyectosDepartamentoBundle:Profesores:anadir.html.twig');
    }
}
