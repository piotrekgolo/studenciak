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
     * Set id_osoby
     *
     * @param \Studenciak\StudentBundle\Entity\Osoba $idOsoby
     * @return Przedmiot
     */
    public function setIdOsoby(\Studenciak\StudentBundle\Entity\Osoba $idOsoby = null)
    {
        $this->id_osoby = $idOsoby;

        return $this;
    }

    /**
     * Get id_osoby
     *
     * @return \Studenciak\StudentBundle\Entity\Osoba 
     */
    public function getIdOsoby()
    {
        return $this->id_osoby;
    }
}
