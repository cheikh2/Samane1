<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use libs\system\Controller;
use src\model\MoralRepository;

class MoralController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    // public function addMoral(){
    //     return $this->view->load("moral/add");
    // }

    public function liste(){
        $moralDb = new MoralRepository();
        $data["listeMoral"] = $moralDb->getAll();
        return $this->view->load("moral/liste", $data);
    }

    public function insert(){
        //if (isset($_POST['ajouter'])) {
            extract($_POST);
            $moral = new Moral();
            $moral->setNomEmpl($nomEmpl);
            $moral->setNinea($ninea);
            $moral->setRc($rc);
            $moral->setRaisonSocial($raisonSocial);
            $moral->setAdressEmpl($adressEmpl);

            $moraldao = new MoralRepository;
            $moraldao->insert($moral);

            return $this->view->redirect("Moral/liste");
    }

    public function edit($id){
        $moralDb = new MoralRepository();
        $data["moral"] = $moralDb->get($id);
        $data["listeMoral"] = $moralDb->getAll();
        return $this->view->load("moral/edit", $data);
    }

    public function update(){
        //if (isset($_POST['ajouter'])) {
            extract($_POST);
            $moral = new Moral();
            $moral->setId($id);
            $moral->setNomEmpl($nomEmpl);
            $moral->setNinea($ninea);
            $moral->setRc($rc);
            $moral->setRaisonSocial($raisonSocial);
            $moral->setAdressEmpl($adressEmpl);

            $moraldao = new MoralRepository;
            $moraldao->update($moral);

            return $this->view->redirect("Moral/liste");
    }
}