<?php

 // src/Studenciak/Entity/Osoba.php

namespace Studenciak\StudentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="osoba")
*/

class Osoba
{
	/**
      * @ORM\Id
      * @ORM\Column(type="integer")
      * @ORM\GeneratedValue(strategy="AUTO")
      */
	protected $idOsoby;
	

     /**
      * @ORM\Column(type="string", length=255)
      */
	protected $nazwisko;
	

     /**
      * @ORM\Column(type="string", length=255)
      */
	protected $email;
	

     /**
      * @ORM\Column(type="string", length=255, nullable=true)
      */
	protected $zdjecie;
	

     /**
      * @ORM\Column(type="integer", nullable=true)
      */
    protected $admin;

    /**
      * @ORM\Column(type="integer", nullable=true)
      */
    protected $aktywny;


    /**
     * Get idOsoby
     *
     * @return integer 
     */
    public function getIdOsoby()
    {
        return $this->idOsoby;
    }

    /**
     * Set nazwisko
     *
     * @param string $nazwisko
     * @return Osoba
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
     * @return Osoba
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

    /**
     * Set zdjecie
     *
     * @param string $zdjecie
     * @return Osoba
     */
    public function setZdjecie($zdjecie)
    {
        $this->zdjecie = $zdjecie;

        return $this;
    }

    /**
     * Get zdjecie
     *
     * @return string 
     */
    public function getZdjecie()
    {
        return $this->zdjecie;
    }

    /**
     * Set admin
     *
     * @param integer $admin
     * @return Osoba
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;

        return $this;
    }

    /**
     * Get admin
     *
     * @return integer 
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * Set aktywny
     *
     * @param integer $aktywny
     * @return Osoba
     */
    public function setAktywny($aktywny)
    {
        $this->aktywny = $aktywny;

        return $this;
    }

    /**
     * Get aktywny
     *
     * @return integer 
     */
    public function getAktywny()
    {
        return $this->aktywny;
    }
}
