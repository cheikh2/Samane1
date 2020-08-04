<?php
use Doctrine\ORM\Annotation as ORM;

/**
 * @Entity @Table(name="compte")
 **/
class Compte
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $numAgence;
    /** @Column(type="string") **/
    private $numCompte;
    /** @Column(type="string") **/
    private $rib;
    /**
     * @Column(type="integer")
     */
    private $montant;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @Column(type="date", nullable=true)
     */
    private $dateDebut;

    /**
     * @Column(type="date", nullable=true)
     */
    private $dateFin;
    /**
     * Many comptes have one moral. This is the owning side.
     * @ManyToOne(targetEntity="Moral", inversedBy="comptes")
     * @JoinColumn(name="moral_id", referencedColumnName="id")
     */
    private $moral;
    /**
     * Many comptes have one physique. This is the owning side.
     * @ManyToOne(targetEntity="Physique", inversedBy="comptes")
     * @JoinColumn(name="physique_id", referencedColumnName="id")
     */
    private $physique;
    /**
     * Many comptes have one type. This is the owning side.
     * @ManyToOne(targetEntity="TypeCompte", inversedBy="comptes")
     * @JoinColumn(name="typeCompte_id", referencedColumnName="id")
     */
    private $typeCompte;
    
    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNumAgence()
    {
        return $this->numAgence;
    }

    public function setNumAgence($numAgence)
    {
        $this->numAgence = $numAgence;
    }

    public function getNumCompte()
    {
        return $this->numCompte;
    }

    public function setNumCompte($numCompte)
    {
        $this->numCompte = $numCompte;
    }

    public function getRib()
    {
        return $this->rib;
    }

    public function setRib($rib)
    {
        $this->rib = $rib;
    }

    public function getMontant()
    {
        return $this->montant;
    }

    public function setMontant($montant)
    {
        $this->montant = $montant;
    }
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    public function getDateFin()
    {
        return $this->dateFin;
    }

    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }

    public function getMoral()
    {
        return $this->moral;
    }
    public function setMoral($moral)
    {
        $this->moral = $moral;
    }

    public function getPhysique()
    {
        return $this->physique;
    }
    public function setPhysique($physique)
    {
        $this->physique = $physique;
    }
    public function getTypeCompte()
    {
        return $this->typeCompte;
    }
    public function setTypeCompte($typeCompte)
    {
        $this->typeCompte = $typeCompte;
    }
}

?>