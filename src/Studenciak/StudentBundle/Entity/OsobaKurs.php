<?php

 // src/Studenciak/Entity/Osoba.php

namespace Studenciak\StudentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="osoba_kurs")
*/

class OsobaKurs
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
      * @ORM\ManyToOne(targetEntity="Kurs")
      * @ORM\JoinColumn(name="id_kursu", referencedColumnName="id_kursu")
      */
     protected $id_kursu;


    /**
     * Set id_osoby
     *
     * @param \Studenciak\StudentBundle\Entity\Osoba $idOsoby
     * @return OsobaKurs
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
     * Set id_kursu
     *
     * @param \Studenciak\StudentBundle\Entity\Kurs $idKursu
     * @return OsobaKurs
     */
    public function setIdKursu(\Studenciak\StudentBundle\Entity\Kurs $idKursu = null)
    {
        $this->id_kursu = $idKursu;

        return $this;
    }

    /**
     * Get id_kursu
     *
     * @return \Studenciak\StudentBundle\Entity\Kurs 
     */
    public function getIdKursu()
    {
        return $this->id_kursu;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
