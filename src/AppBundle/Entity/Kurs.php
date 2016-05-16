<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kurs
 *
 * @ORM\Table(name="kurs")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\KursRepository")
 */
class Kurs
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
     * @var int
     *
     * @ORM\Column(name="idKurs", type="integer", unique=true)
     */
    private $idKurs;

    /**
     * @var int
     *
     * @ORM\Column(name="CalkowitaOdleglosc", type="integer")
     */
    private $calkowitaOdleglosc;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idKurs
     *
     * @param integer $idKurs
     *
     * @return Kurs
     */
    public function setIdKurs($idKurs)
    {
        $this->idKurs = $idKurs;

        return $this;
    }

    /**
     * Get idKurs
     *
     * @return int
     */
    public function getIdKurs()
    {
        return $this->idKurs;
    }

    /**
     * Set calkowitaOdleglosc
     *
     * @param integer $calkowitaOdleglosc
     *
     * @return Kurs
     */
    public function setCalkowitaOdleglosc($calkowitaOdleglosc)
    {
        $this->calkowitaOdleglosc = $calkowitaOdleglosc;

        return $this;
    }

    /**
     * Get calkowitaOdleglosc
     *
     * @return int
     */
    public function getCalkowitaOdleglosc()
    {
        return $this->calkowitaOdleglosc;
    }
}

