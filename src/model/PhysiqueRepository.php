<?php
namespace src\model; 

use libs\system\Model; 
	
class PhysiqueRepository extends Model{

	public function __construct(){
		parent::__construct();
	}
	
	public function getAll()
    {
        return $this->db->getRepository('Physique')->findAll();
    }

    public function get($id)
    {
        return $this->db->getRepository('Physique')->find(array("id" => $id));
	}
	
	public function getMoral($id)
    {
        return $this->db->getRepository('Moral')->find(array("id" => $id));
    }

    public function insert($physique)
    {
        $this->db->persist($physique);
        $this->db->flush();
    }

    public function update($physique)
    {
        $p = $this->get($physique->getId());
        
        $p->setNom($physique->getNom());
        $p->setPrenom($physique->getPrenom());
        $p->setAdress($physique->getAdress());
        $p->setEmail($physique->getEmail());
		$p->setTelephone($physique->getTelephone());
		$p->setSexe($physique->getSexe());
		$p->setProfession($physique->getProfession());
		$p->setCni($physique->getCni());
		$p->setSalaire($physique->getSalaire());
		$p->setMoral($physique->getMoral());

        $this->db->flush();
    }
}