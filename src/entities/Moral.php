<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity 
 * @Table(name="moral")
 **/
class Moral
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $nomEmpl;
    /** @Column(type="string") **/
    private $ninea;
    /** @Column(type="string") **/
    private $rc;
    /**
     * @Column(type="string")
     */
    private $raisonSocial;

    /**
     * @Column(type="string")
     */
    private $adressEmpl;
     /**
     * One moral has many comptes. This is the inverse side.
     * @OneToMany(targetEntity="Compte", mappedBy="moral")
     */
    private $comptes;
    /**
     * One moral has many physiques. This is the inverse side.
     * @OneToMany(targetEntity="Physique", mappedBy="moral")
     */
    private $physiques;
    
    public function __construct()
    {
        $this->comptes = new ArrayCollection();
        $this->physiques = new ArrayCollection();
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNomEmpl()
    {
        return $this->nomEmpl;
    }


    public function setNomEmpl($nomEmpl)
    {
        $this->nomEmpl = $nomEmpl;

        return $this;
    }

    public function getNinea()
    {
        return $this->ninea;
    }

    public function setNinea($ninea)
    {
        $this->ninea = $ninea;

        return $this;
    }

    public function getRc()
    {
        return $this->rc;
    }

    public function setRc($rc)
    {
        $this->rc = $rc;

        return $this;
    }

    public function getRaisonSocial()
    {
        return $this->raisonSocial;
    }

    public function setRaisonSocial($raisonSocial)
    {
        $this->raisonSocial = $raisonSocial;

        return $this;
    }

    public function getAdressEmpl()
    {
        return $this->adressEmpl;
    }

    public function setAdressEmpl($adressEmpl)
    {
        $this->adressEmpl = $adressEmpl;

        return $this;
    }
    
    public function getComptes()
    {
        return $this->comptes;
    }
    public function setComptes($comptes)
    {
        $this->comptes = $comptes;
    }

    public function getPhysiques()
    {
        return $this->physiques;
    }
    public function setPhysiques($physiques)
    {
        $this->physiques = $physiques;
    }
}

?>