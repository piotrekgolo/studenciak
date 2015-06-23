<?php

 // src/Studenciak/Entity/OsobaZajecia.php

namespace Studenciak\StudentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="osoba_zajecia")
*/

class OsobaZajecia
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
      * @ORM\ManyToOne(targetEntity="Zajecia")
      * @ORM\JoinColumn(name="id_zajec", referencedColumnName="id_zajec")
      */
     protected $id_zajec;



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
     * @return osobaZajecia
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
     * Set id_zajec
     *
     * @param \Studenciak\StudentBundle\Entity\Zajecia $idZajec
     * @return osobaZajecia
     */
    public function setIdZajec(\Studenciak\StudentBundle\Entity\Zajecia $idZajec = null)
    {
        $this->id_zajec = $idZajec;

        return $this;
    }

    /**
     * Get id_zajec
     *
     * @return \Studenciak\StudentBundle\Entity\Zajecia 
     */
    public function getIdZajec()
    {
        return $this->id_zajec;
    }
}
