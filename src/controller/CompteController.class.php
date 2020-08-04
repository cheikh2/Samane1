<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use libs\system\Controller;
use src\model\CompteRepository;
use src\model\MoralRepository;
use src\model\PhysiqueRepository;

class CompteController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function liste(){
        $compteDb = new CompteRepository();
        $data["listeCompte"] = $compteDb->getAll();

        $moralDb = new MoralRepository();
        $data["listeMoral"] = $moralDb->getAll();

        $physiqueDb = new PhysiqueRepository();
        $data["listePhysique"] = $physiqueDb->getAll();
        
        return $this->view->load("compte/liste", $data);
    }

    public function insert(){
        $comptedao = new CompteRepository();
            $date = new \DateTime();
            extract($_POST);
            $compte = new Compte();
            $compte->setNumAgence($numAgence);
            $compte->setNumCompte($numCompte);
            $compte->setRib($rib);
            $compte->setMontant($montant);
            //$compte->setCreatedAt($date);  

            $compte->setDateDebut($dateDebut);
            $compte->setDateFin($dateFin);

            $compte->setMoral($comptedao->getMoral($idmoral));
            $compte->setPhysique($comptedao->getPhysique($idphysique));

            $comptedao->insert($compte);

            return $this->view->redirect("Compte/liste");
    }

}