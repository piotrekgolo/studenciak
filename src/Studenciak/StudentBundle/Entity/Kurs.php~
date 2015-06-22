<?php

 // src/Studenciak/Entity/Kurs.php

namespace Studenciak\StudentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="kurs")
*/

class Kurs
{
	/**
      * @ORM\Id
      * @ORM\Column(type="integer")
      * @ORM\GeneratedValue(strategy="AUTO")
      */
	protected $id_kursu;
	

     /**
      * @ORM\ManyToOne(targetEntity="Osoba")
      * @ORM\JoinColumn(name="id_osoby", referencedColumnName="id_osoby")
      */
	protected $id_osoby;
	
	

     /**
      * @ORM\Column(type="string", length=20)
      */
	protected $typ_zajec;
    

     /**
      * @ORM\Column(type="string", length=45)
      */
    protected $sala;


     /**
      * @ORM\Column(type="datetime")
      */
    protected $termin;


     /**
      * @ORM\ManyToOne(targetEntity="Przedmiot")
      * @ORM\JoinColumn(name="id_przedmiotu", referencedColumnName="id_przedmiotu")
      */
    protected $id_przedmiotu;

    /**
     * Get id_kursu
     *
     * @return integer 
     */
    public function getIdKursu()
    {
        return $this->id_kursu;
    }

    /**
     * Set id_osoby
     *
     * @param integer $idOsoby
     * @return Kurs
     */
    public function setIdOsoby($idOsoby)
    {
        $this->id_osoby = $idOsoby;

        return $this;
    }

    /**
     * Get id_osoby
     *
     * @return integer 
     */
    public function getIdOsoby()
    {
        return $this->id_osoby;
    }

    /**
     * Set id_zajec
     *
     * @param integer $idZajec
     * @return Kurs
     */
    public function setIdZajec($idZajec)
    {
        $this->id_zajec = $idZajec;

        return $this;
    }

    /**
     * Get id_zajec
     *
     * @return integer 
     */
    public function getIdZajec()
    {
        return $this->id_zajec;
    }

    /**
     * Set typ_zajec
     *
     * @param string $typZajec
     * @return Kurs
     */
    public function setTypZajec($typZajec)
    {
        $this->typ_zajec = $typZajec;

        return $this;
    }

    /**
     * Get typ_zajec
     *
     * @return string 
     */
    public function getTypZajec()
    {
        return $this->typ_zajec;
    }

    /**
     * Set sala
     *
     * @param string $sala
     * @return Kurs
     */
    public function setSala($sala)
    {
        $this->sala = $sala;

        return $this;
    }

    /**
     * Get sala
     *
     * @return string 
     */
    public function getSala()
    {
        return $this->sala;
    }

    /**
     * Set termin
     *
     * @param \DateTime $termin
     * @return Kurs
     */
    public function setTermin($termin)
    {
        $this->termin = $termin;

        return $this;
    }

    /**
     * Get termin
     *
     * @return \DateTime 
     */
    public function getTermin()
    {
        return $this->termin;
    }

    /**
     * Set id_przedmiotu
     *
     * @param \Studenciak\StudentBundle\Entity\Przedmiot $idPrzedmiotu
     * @return Kurs
     */
    public function setIdPrzedmiotu(\Studenciak\StudentBundle\Entity\Przedmiot $idPrzedmiotu = null)
    {
        $this->id_przedmiotu = $idPrzedmiotu;

        return $this;
    }

    /**
     * Get id_przedmiotu
     *
     * @return \Studenciak\StudentBundle\Entity\Przedmiot 
     */
    public function getIdPrzedmiotu()
    {
        return $this->id_przedmiotu;
    }
}
