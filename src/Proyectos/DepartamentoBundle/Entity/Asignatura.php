<?php

namespace Proyectos\DepartamentoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asignatura
 *
 * @ORM\Table(name="asignatura", indexes={@ORM\Index(name="fk_asignatura_alumno_idx", columns={"alumno_idalumno"}), @ORM\Index(name="fk_asignatura_profesor1_idx", columns={"profesor_idprofesor"})})
 * @ORM\Entity
 */
class Asignatura
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idasignatura", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idasignatura;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=true)
     */
    private $nombre;

    /**
     * @var \Proyectos\DepartamentoBundle\Entity\Alumno
     *
     * @ORM\ManyToOne(targetEntity="Proyectos\DepartamentoBundle\Entity\Alumno")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="alumno_idalumno", referencedColumnName="idalumno")
     * })
     */
    private $alumnoalumno;

    /**
     * @var \Proyectos\DepartamentoBundle\Entity\Profesor
     *
     * @ORM\ManyToOne(targetEntity="Proyectos\DepartamentoBundle\Entity\Profesor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="profesor_idprofesor", referencedColumnName="idprofesor")
     * })
     */
    private $profesorprofesor;



    /**
     * Get idasignatura
     *
     * @return integer 
     */
    public function getIdasignatura()
    {
        return $this->idasignatura;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Asignatura
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set alumnoalumno
     *
     * @param \Proyectos\DepartamentoBundle\Entity\Alumno $alumnoalumno
     * @return Asignatura
     */
    public function setAlumnoalumno(\Proyectos\DepartamentoBundle\Entity\Alumno $alumnoalumno = null)
    {
        $this->alumnoalumno = $alumnoalumno;

        return $this;
    }

    /**
     * Get alumnoalumno
     *
     * @return \Proyectos\DepartamentoBundle\Entity\Alumno 
     */
    public function getAlumnoalumno()
    {
        return $this->alumnoalumno;
    }

    /**
     * Set profesorprofesor
     *
     * @param \Proyectos\DepartamentoBundle\Entity\Profesor $profesorprofesor
     * @return Asignatura
     */
    public function setProfesorprofesor(\Proyectos\DepartamentoBundle\Entity\Profesor $profesorprofesor = null)
    {
        $this->profesorprofesor = $profesorprofesor;

        return $this;
    }

    /**
     * Get profesorprofesor
     *
     * @return \Proyectos\DepartamentoBundle\Entity\Profesor 
     */
    public function getProfesorprofesor()
    {
        return $this->profesorprofesor;
    }
}
