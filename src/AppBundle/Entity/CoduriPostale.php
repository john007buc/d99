<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * Class CoduriPostale
 * @package AppBundle\Entity
 * @ORM\Table(name="coduripostale")
 * @ORM\Entity()
 */
class CoduriPostale{

    /**
     * @var int
     * @ORM\Column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy = "AUTO")
     */
    private $id;


    /**
     * @var string
     * @ORM\Column(name="Judet", type="string", length=50)
     */
    protected $judet;

    /**
     * @var string
     * @ORM\Column(name="Localitate", type="string", length=50)
     */
    protected $localitate;

    /**
     * @var string
     * @ORM\Column(name="Tip_artera", type="string", length=20)
     */
    protected $tip_artera;

    /**
     * @var string
     * @ORM\Column(name="Denumire_artera", type="string", length=60)
     */
    protected $denumire_artera;

    /**
     * @var string
     * @ORM\Column(name="Numar_Bloc, type="string", length=5)
     */
    protected $numar_bloc;

    /**
     * @var string
     * @ORM\Column(name="Codpostal", type="string", length=50)
     */
    protected $codpostal;

    /**
     * @var string
     * @ORM\Column(name="Slug", type="string", length=50)
     */
    protected $slug;
    
    
}


