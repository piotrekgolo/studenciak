<?php

 // src/Studenciak/Entity/OsobaPrzedmiot.php

namespace Studenciak\StudentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="osoba_przedmiot")
*/

class OsobaPrzedmiot
{
      /**
      * @ORM\Id
      * @ORM\Column(type="integer")
      * @ORM\GeneratedValue(strategy="AUTO")
      */
    protected $id;


     /**
      * @ORM\ManyToOne(targetEntity="Osoba")
      * @ORM\JoinColumn(name="id_osoby", referencedColumnName="id_osoby")
      */
     protected $id_osoby;


     /**
      * @ORM\ManyToOne(targetEntity="Przedmiot")
      * @ORM\JoinColumn(name="id_przedmiotu", referencedColumnName="id_przedmiotu")
      */
     protected $id_przedmiotu;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id_osoby
     *
     * @param \Studenciak\StudentBundle\Entity\Osoba $idOsoby
     * @return OsobaPrzedmiot
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

    /**
     * Set id_przedmiotu
     *
     * @param \Studenciak\StudentBundle\Entity\Przedmiot $idPrzedmiotu
     * @return OsobaPrzedmiot
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
