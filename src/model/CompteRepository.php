<?php
namespace src\model; 

use libs\system\Model; 
	
class CompteRepository extends Model{
	
	public function __construct(){
		parent::__construct();
	}
	
	public function getAll()
    {
        return $this->db->getRepository('Compte')->findAll();
    }

    public function get($id)
    {
        return $this->db->getRepository('Compte')->find(array("id" => $id));
	}
	
	public function getPhysique($id)
    {
        return $this->db->getRepository('Physique')->find(array("id" => $id));
	}
	
	public function getMoral($id)
    {
        return $this->db->getRepository('Moral')->find(array("id" => $id));
    }

    public function insert($compte)
    {
        $this->db->persist($compte);
        $this->db->flush();
    }

    public function update($compte)
    {
        $c = $this->get($compte->getId());
        
        $c->setNumAgence($compte->getNumAgence());
        $c->setNumCompte($compte->getNumCompte());
        $c->setRib($compte->getRib());
        $c->setMontant($compte->getMontant());
		$c->setCreatedAt($compte->getCreatedAt());
		$c->setDateDebut($compte->getDateDebut());
		$c->setDateFin($compte->getDateFin());
		$c->setMoral($compte->getMoral());
		$c->setPhysique($compte->getPhysique());

        $this->db->flush();
    }
}