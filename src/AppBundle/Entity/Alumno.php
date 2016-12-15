<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpKernel\HttpCache\Esi;

/**
 * Alumno
 * @ORM\Entity
 */

class Alumno
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /*
     * @var string
     *
     * @ORM\Column(type="string", length=12)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=12)
     */
    private $apellidos;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="date")
     */
    private $fechanac;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    private $observaciones;

    /**
     * @var Parte []
     * @ORM\OneToMany(targetEntity="Parte", mappedBy="alumno")
     */
    private $partes;

    /**
     * @var Grupo
     * @ORM\ManyToOne(targetEntity="Grupo", inversedBy="alumnos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $grupo;

}