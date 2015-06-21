<?php

 // src/Studenciak/Entity/Przedmiot.php

namespace Studenciak\StudentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
* @ORM\Entity
* @ORM\Table(name="przedmiot")
*/

class Przedmiot
{
    /**
      * @ORM\Id
      * @ORM\Column(type="integer")
      * @ORM\GeneratedValue(strategy="AUTO")
      */
    protected $id_przedmiotu;
    

      /**
      * @ORM\ManyToOne(targetEntity="Osoba")
      * @ORM\JoinColumn(name="id_osoby", referencedColumnName="id_osoby")
      */

    protected $id_osoby;
    
     /**
      * @ORM\Column(type="string", length=255)
      */
    protected $nazwa;

     /**
      * @ORM\Column(type="integer")
       * @Assert\Range(
     *      min = 1,
     *      max = 8,
     *      minMessage = "Minimalna wartość to 1",
     *      maxMessage = "Maksymalna wartość to 8"
     * )
      */
    protected $semestr;
    

     /**
      * @ORM\Column(type="string", length=255)
      */
    protected $haslo;

    /**
     * Get id_przedmiotu
     *
     * @return integer 
     */
    public function getIdPrzedmiotu()
    {
        return $this->id_przedmiotu;
    }

    /**
     * Set id_osoby
     *
     * @param integer $idOsoby
     * @return Przedmiot
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
     * Set semestr
     *
     * @param integer $semestr
     * @return Przedmiot
     */
    public function setSemestr($semestr)
    {
        $this->semestr = $semestr;

        return $this;
    }

    /**
     * Get semestr
     *
     * @return integer 
     */
    public function getSemestr()
    {
        return $this->semestr;
    }

    /**
     * Set haslo
     *
     * @param string $haslo
     * @return Przedmiot
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
     * Set nazwa
     *
     * @param string $nazwa
     * @return Przedmiot
     */
    public function setNazwa($nazwa)
    {
        $this->nazwa = $nazwa;

        return $this;
    }

    /**
     * Get nazwa
     *
     * @return string 
     */
    public function getNazwa()
    {
        return $this->nazwa;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->id_osoby = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add id_osoby
     *
     * @param \Studenciak\StudentBundle\Entity\Osoba $idOsoby
     * @return Przedmiot
     */
    public function addIdOsoby(\Studenciak\StudentBundle\Entity\Osoba $idOsoby)
    {
        $this->id_osoby[] = $idOsoby;

        return $this;
    }

    /**
     * Remove id_osoby
     *
     * @param \Studenciak\StudentBundle\Entity\Osoba $idOsoby
     */
    public function removeIdOsoby(\Studenciak\StudentBundle\Entity\Osoba $idOsoby)
    {
        $this->id_osoby->removeElement($idOsoby);
    }
}
