<?php

 // src/Studenciak/Entity/Obecnosci.php

namespace Studenciak\StudentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="obecnosci")
*/

class Obecnosci
{
    /**
      * @ORM\Id
      * @ORM\Column(type="integer")
      * @ORM\GeneratedValue(strategy="AUTO")
      */
    protected $id_obecnosci;
    

     /**
      * @ORM\ManyToOne(targetEntity="Osoba")
      * @ORM\JoinColumn(name="id_osoby", referencedColumnName="id_osoby")
      */
    protected $id_osoby;
    

     /**
      * @ORM\ManyToOne(targetEntity="Zajecia")
      * @ORM\JoinColumn(name="id_zajecia", referencedColumnName="id_zajecia")
      */
    protected $id_zajecia;
    


    /**
     * Get id_obecnosci
     *
     * @return integer 
     */
    public function getIdObecnosci()
    {
        return $this->id_obecnosci;
    }

    /**
     * Set id_osoby
     *
     * @param integer $idOsoby
     * @return Obecnosci
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
     * Set id_zajecia
     *
     * @param integer $idZajecia
     * @return Obecnosci
     */
    public function setIdZajecia($idZajecia)
    {
        $this->id_zajecia = $idZajecia;

        return $this;
    }

    /**
     * Get id_zajecia
     *
     * @return integer 
     */
    public function getIdZajecia()
    {
        return $this->id_zajecia;
    }
}
