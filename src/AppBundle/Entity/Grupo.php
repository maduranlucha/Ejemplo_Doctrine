<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grupo
 * @ORM\Entity
 */

class Grupo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", length=12)
     */
    private $numeroaula;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", length=12)
     */
    private $planta;

    /**
     * @var Alumno []
     * @ORM\OneToMany(targetEntity="Alumno", mappedBy="grupo")
     */
    private $alumnos;

    /**
     * @var Profesor[]
     * @ORM\ManyToMany(targetEntity="Profesor", inversedBy="grupos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $profesores;

    /**
     * @var Tutor[]
     * @ORM\OneToOne(targetEntity="Profesor", mappedBy="grupo")
     */
    private $tutor;

}