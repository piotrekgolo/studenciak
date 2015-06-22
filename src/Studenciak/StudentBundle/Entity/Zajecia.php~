<?php

 // src/Studenciak/Entity/Zajecia.php

namespace Studenciak\StudentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="zajecia")
*/

class Zajecia
{
	/**
      * @ORM\Id
      * @ORM\Column(type="integer")
      * @ORM\GeneratedValue(strategy="AUTO")
      */
	protected $id_zajec;
	

     /**
      * @ORM\Column(type="string", length=255)
      */
	protected $temat;
	

     /**
      * @ORM\Column(type="date")
      */
	protected $data_zajec;
	
     /**
      * @ORM\ManyToOne(targetEntity="Kurs")
      * @ORM\JoinColumn(name="id_kursu", referencedColumnName="id_kursu")
      */
    protected $id_kursu;

    /**
     * Get id_zajecia
     *
     * @return integer 
     */
    public function getIdZajecia()
    {
        return $this->id_zajecia;
    }

    /**
     * Set temat
     *
     * @param string $temat
     * @return Zajecia
     */
    public function setTemat($temat)
    {
        $this->temat = $temat;

        return $this;
    }

    /**
     * Get temat
     *
     * @return string 
     */
    public function getTemat()
    {
        return $this->temat;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     * @return Zajecia
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
     * Get id_zajec
     *
     * @return integer 
     */
    public function getIdZajec()
    {
        return $this->id_zajec;
    }

    /**
     * Set id_kursu
     *
     * @param \Studenciak\StudentBundle\Entity\Kurs $idKursu
     * @return Zajecia
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
     * Set data_zajec
     *
     * @param \DateTime $dataZajec
     * @return Zajecia
     */
    public function setDataZajec($dataZajec)
    {
        $this->data_zajec = $dataZajec;

        return $this;
    }

    /**
     * Get data_zajec
     *
     * @return \DateTime 
     */
    public function getDataZajec()
    {
        return $this->data_zajec;
    }
}
