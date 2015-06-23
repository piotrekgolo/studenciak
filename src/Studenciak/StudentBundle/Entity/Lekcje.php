<?php

 // src/Studenciak/Entity/Lekcje.php

namespace Studenciak\StudentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="lekcje")
*/

class Lekcje
{
	/**
      * @ORM\Id
      * @ORM\Column(type="integer")
      * @ORM\GeneratedValue(strategy="AUTO")
      */
	protected $id_lekcji;
	

     /**
      * @ORM\Column(type="string", length=255)
      */
	protected $temat;
	

     /**
      * @ORM\Column(type="date")
      */
	protected $data_lekcji;
	
     /**
      * @ORM\ManyToOne(targetEntity="Zajecia")
      * @ORM\JoinColumn(name="id_zajec", referencedColumnName="id_zajec")
      */
    protected $id_zajec;

    /**
     * Get id_lekcji
     *
     * @return integer 
     */
    public function getIdLekcji()
    {
        return $this->id_lekcji;
    }

    /**
     * Set temat
     *
     * @param string $temat
     * @return Lekcje
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
     * Set data_lekcji
     *
     * @param \DateTime $dataLekcji
     * @return Lekcje
     */
    public function setDataLekcji($dataLekcji)
    {
        $this->data_lekcji = $dataLekcji;

        return $this;
    }

    /**
     * Get data_lekcji
     *
     * @return \DateTime 
     */
    public function getDataLekcji()
    {
        return $this->data_lekcji;
    }

    /**
     * Set id_zajec
     *
     * @param \Studenciak\StudentBundle\Entity\Zajecia $idZajec
     * @return Lekcje
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
