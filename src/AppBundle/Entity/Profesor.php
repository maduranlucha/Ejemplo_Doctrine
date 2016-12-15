<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pofesor
 * @ORM\Entity
 */

class Profesor
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
     * @ORM\Column(type="string", length=12)
     */
    private $dni;

    /**
     * @var string
     * @ORM\Column(type="string", length=12)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=12)
     */
    private $apelldios;

    /**
     * @var Parte []
     * @ORM\OneToMany(targetEntity="Parte", mappedBy="profesor")
     */
    private $partes;

    /**
     * @var Grupo []
     * @ORM\ManyToMany(targetEntity="Grupo", mappedBy="profesores")
     * @ORM\JoinColumn(nullable=false)
     */
    private $grupos;

    /**
     * @var Grupo []
     * @ORM\OneToOne(targetEntity="Grupo", inversedBy="tutor")
     * @ORM\JoinColumn(nullable=false)
     */
    private $grupo;

}