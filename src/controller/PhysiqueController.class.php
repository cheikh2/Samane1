<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use libs\system\Controller;
use src\model\MoralRepository;
use src\model\PhysiqueRepository;

class PhysiqueController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function liste(){
        $moralDb = new MoralRepository();
        $data["listeMoral"] = $moralDb->getAll();
        $physiqueDb = new PhysiqueRepository();
        $data["listePhysique"] = $physiqueDb->getAll();
        return $this->view->load("physique/liste", $data);
    }

    public function insert(){
        $physiquedao = new PhysiqueRepository();
            extract($_POST);
            $physique = new Physique();
            $physique->setPrenom($prenom);
            $physique->setNom($nom);
            $physique->setAdress($adress);
            $physique->setEmail($email);
            $physique->setTelephone($telephone);
            $physique->setSexe($sexe);
            $physique->setProfession($profession);
            $physique->setCni($cni);
            $physique->setSalaire($salaire);
            $physique->setSexe($sexe);
            $physique->setMoral($physiquedao->getMoral($idmoral));

            $physiquedao->insert($physique);

            return $this->view->redirect("Physique/liste");
    }

    
}