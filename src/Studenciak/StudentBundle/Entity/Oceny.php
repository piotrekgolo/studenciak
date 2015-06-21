<?php

 // src/Studenciak/Entity/Oceny.php

namespace Studenciak\StudentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="oceny")
*/

class Oceny
{
    /**
      * @ORM\Id
      * @ORM\Column(type="integer")
      * @ORM\GeneratedValue(strategy="AUTO")
      */
    protected $id_oceny;
    

     /**
            * @ORM\ManyToOne(targetEntity="Kurs")
      * @ORM\JoinColumn(name="id_kursu", referencedColumnName="id_kursu")
      */
    protected $id_kursu;
    

     /**
      * @ORM\ManyToOne(targetEntity="Osoba")
      * @ORM\JoinColumn(name="id_osoby", referencedColumnName="id_osoby")
      */
    protected $id_osoby;
    

     /**
      * @ORM\Column(type="integer", precision=6, scale=2)
      */
    protected $ocena;
    

     /**
      * @ORM\Column(type="datetime")
      */
    protected $data;




    /**
     * Get id_oceny
     *
     * @return integer 
     */
    public function getIdOceny()
    {
        return $this->id_oceny;
    }

    /**
     * Set id_kursu
     *
     * @param integer $idKursu
     * @return Oceny
     */
    public function setIdKursu($idKursu)
    {
        $this->id_kursu = $idKursu;

        return $this;
    }

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
     * @return Oceny
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
     * Set ocena
     *
     * @param \double $ocena
     * @return Oceny
     */
    public function setOcena(\double $ocena)
    {
        $this->ocena = $ocena;

        return $this;
    }

    /**
     * Get ocena
     *
     * @return \double 
     */
    public function getOcena()
    {
        return $this->ocena;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     * @return Oceny
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime 
     */
    public function getData()
    {
        return $this->data;
    }
}
