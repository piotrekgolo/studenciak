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
      * @ORM\ManyToOne(targetEntity="Lekcje")
      * @ORM\JoinColumn(name="id_lekcji", referencedColumnName="id_lekcji")
      */
    protected $id_lekcji;
    

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
     * @param \Studenciak\StudentBundle\Entity\Osoba $idOsoby
     * @return Obecnosci
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
     * Set id_lekcji
     *
     * @param \Studenciak\StudentBundle\Entity\Lekcje $idLekcji
     * @return Obecnosci
     */
    public function setIdLekcji(\Studenciak\StudentBundle\Entity\Lekcje $idLekcji = null)
    {
        $this->id_lekcji = $idLekcji;

        return $this;
    }

    /**
     * Get id_lekcji
     *
     * @return \Studenciak\StudentBundle\Entity\Lekcje 
     */
    public function getIdLekcji()
    {
        return $this->id_lekcji;
    }
}
