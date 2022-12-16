<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

class CompaniesController extends AppController{
    
    public function initialize(): void{
        parent::initialize();
        $this->viewBuilder()->setLayout("admin");
    }

    public function addCompany(){

        $this->set("title", "Add Company(-ies) | Leaf");
    }

    public function listCompanies(){

        $this->set("title", "List Companies | Leaf");
    }

    public function editCompany($id = null){
        $this->set("title", "Edit Company(-ies) | Leaf");
    }

    public function deleteCompany($id = null){
        
    }
}
