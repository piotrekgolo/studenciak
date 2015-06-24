<?php

 // src/Studenciak/Entity/Repozytorium.php

namespace Studenciak\StudentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="repozytorium")
*/

class Repozytorium
{
	/**
      * @ORM\Id
      * @ORM\Column(type="integer")
      * @ORM\GeneratedValue(strategy="AUTO")
      */
    protected $id_repozytorium;
    

      /**
      * @ORM\ManyToOne(targetEntity="Przedmiot")
      * @ORM\JoinColumn(name="id_przedmiotu", referencedColumnName="id_przedmiotu")
      */

    protected $id_przedmiotu;
    
      /**
      * @ORM\ManyToOne(targetEntity="Osoba")
      * @ORM\JoinColumn(name="id_osoby", referencedColumnName="id_osoby")
      */
    protected $id_osoby;
    

     /**
      * @ORM\Column(type="string", length=512)
      */
    protected $nazwa;
    

     /**
      * @ORM\Column(type="string", length=50)
      */
    protected $typ;
	



    /**
     * Get id_repozytorium
     *
     * @return integer 
     */
    public function getIdRepozytorium()
    {
        return $this->id_repozytorium;
    }

    /**
     * Set nazwa
     *
     * @param string $nazwa
     * @return Repozytorium
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
     * Set typ
     *
     * @param string $typ
     * @return Repozytorium
     */
    public function setTyp($typ)
    {
        $this->typ = $typ;

        return $this;
    }

    /**
     * Get typ
     *
     * @return string 
     */
    public function getTyp()
    {
        return $this->typ;
    }

    /**
     * Set id_przedmiotu
     *
     * @param \Studenciak\StudentBundle\Entity\Przedmiot $idPrzedmiotu
     * @return Repozytorium
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

    /**
     * Set id_osoby
     *
     * @param \Studenciak\StudentBundle\Entity\Osoba $idOsoby
     * @return Repozytorium
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
