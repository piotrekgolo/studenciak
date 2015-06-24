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
            * @ORM\ManyToOne(targetEntity="Zajecia")
      * @ORM\JoinColumn(name="id_zajec", referencedColumnName="id_zajec")
      */
    protected $id_zajec;
    

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
     * Set ocena
     *
     * @param integer $ocena
     * @return Oceny
     */
    public function setOcena($ocena)
    {
        $this->ocena = $ocena;

        return $this;
    }

    /**
     * Get ocena
     *
     * @return integer 
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

    /**
     * Set id_zajec
     *
     * @param \Studenciak\StudentBundle\Entity\Zajecia $idZajec
     * @return Oceny
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

    /**
     * Set id_osoby
     *
     * @param \Studenciak\StudentBundle\Entity\Osoba $idOsoby
     * @return Oceny
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
