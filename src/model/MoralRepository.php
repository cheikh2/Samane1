<?php

namespace src\model;

use libs\system\Model;

class MoralRepository extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        return $this->db->getRepository('Moral')->findAll();
    }

    public function get($id)
    {
        return $this->db->getRepository('Moral')->find(array("id" => $id));
    }

    public function insert($moral)
    {
        $this->db->persist($moral);
        $this->db->flush();
    }

    public function update($moral)
    {
        $m = $this->get($moral->getId());
        
        $m->setNomEmpl($moral->getNomEmpl());
        $m->setNinea($moral->getNinea());
        $m->setRc($moral->getRc());
        $m->setRaisonSocial($moral->getRaisonSocial());
        $m->setAdressEmpl($moral->getAdressEmpl());

        $this->db->flush();
    }
}
