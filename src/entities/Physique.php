<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="physique")
 **/
class Physique
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;

    /**
     * @Column(type="string") 
     **/
    private $prenom;

    /**
     * @Column(type="string")
     */
    private $nom;

    /**
     * @Column(type="string")
     */
    private $adress;

    /**
     * @Column(type="string")
     */
    private $email;

    /**
     * @Column(type="string")
     */
    private $telephone;

    /**
     * @Column(type="string")
     */
    private $sexe;

    /**
     * @Column(type="string")
     */
    private $profession;

    /**
     * @Column(type="string")
     */
    private $cni;

    /**
     * @Column(type="string")
     */
    private $salaire;

     /**
     * Many physique have one moral. This is the owning side.
     * @ManyToOne(targetEntity="Moral", inversedBy="physiques")
     * @JoinColumn(name="moral_id", referencedColumnName="id")
     */
    private $moral;
    /**
     * One physique has many comptes. This is the inverse side.
     * @OneToMany(targetEntity="Compte", mappedBy="physique")
     */
    private $comptes;
    
    public function __construct()
    {
        $this->comptes = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function getAdress()
    {
        return $this->adress;
    }
    public function setAdress($adress)
    {
        $this->adress = $adress;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getTelephone()
    {
        return $this->telephone;
    }
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }
    public function getSexe()
    {
        return $this->sexe;
    }
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }
    public function getProfession()
    {
        return $this->profession;
    }
    public function setProfession($profession)
    {
        $this->profession = $profession;
    }
    public function getCni()
    {
        return $this->cni;
    }
    public function setCni($cni)
    {
        $this->cni = $cni;
    }
    public function getSalaire()
    {
        return $this->salaire;
    }
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
    }
    public function getMoral()
    {
        return $this->moral;
    }
    public function setMoral($moral)
    {
        $this->moral = $moral;
    }
    public function getComptes()
    {
        return $this->comptes;
    }
    public function setComptes($comptes)
    {
        $this->comptes = $comptes;
    }
}