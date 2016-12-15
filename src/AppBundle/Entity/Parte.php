<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parte
 * @ORM\Entity
 */

class Parte
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
     * @var \DateTime
     *
     * @ORM\Column(type="date", length=12)
     */
    private $fechanac;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean")
     */
    private $avisado;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    private $observaciones;

    /**
     * @var Profesor
     * @ORM\ManyToOne(targetEntity="Profesor", inversedBy="partes")
     */
    private $profesor;

    /**
     * @var Alumno
     * @ORM\ManyToOne(targetEntity="Alumno", inversedBy="partes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $alumno;

}