<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administracja
 *
 * @ORM\Table(name="administracja")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AdministracjaRepository")
 */
class Administracja
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
     * @ORM\Column(name="idAdministracja", type="integer", unique=true)
     */
    private $idAdministracja;

    /**
     * @var string
     *
     * @ORM\Column(name="Haslo", type="string", length=45)
     */
    private $haslo;

    /**
     * @var string
     *
     * @ORM\Column(name="Imie", type="string", length=45)
     */
    private $imie;

    /**
     * @var string
     *
     * @ORM\Column(name="Nazwisko", type="string", length=45)
     */
    private $nazwisko;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=45)
     */
    private $email;


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
     * Set idAdministracja
     *
     * @param integer $idAdministracja
     *
     * @return Administracja
     */
    public function setIdAdministracja($idAdministracja)
    {
        $this->idAdministracja = $idAdministracja;

        return $this;
    }

    /**
     * Get idAdministracja
     *
     * @return int
     */
    public function getIdAdministracja()
    {
        return $this->idAdministracja;
    }

    /**
     * Set haslo
     *
     * @param string $haslo
     *
     * @return Administracja
     */
    public function setHaslo($haslo)
    {
        $this->haslo = $haslo;

        return $this;
    }

    /**
     * Get haslo
     *
     * @return string
     */
    public function getHaslo()
    {
        return $this->haslo;
    }

    /**
     * Set imie
     *
     * @param string $imie
     *
     * @return Administracja
     */
    public function setImie($imie)
    {
        $this->imie = $imie;

        return $this;
    }

    /**
     * Get imie
     *
     * @return string
     */
    public function getImie()
    {
        return $this->imie;
    }

    /**
     * Set nazwisko
     *
     * @param string $nazwisko
     *
     * @return Administracja
     */
    public function setNazwisko($nazwisko)
    {
        $this->nazwisko = $nazwisko;

        return $this;
    }

    /**
     * Get nazwisko
     *
     * @return string
     */
    public function getNazwisko()
    {
        return $this->nazwisko;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Administracja
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
}

