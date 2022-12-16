<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

class SurveysController extends AppController{

    public function initialize(): void{
        parent::initialize();
        $this->viewBuilder()->setLayout("admin");
    }

    public function addSurvey(){

        $this->set("title", "Create Survey(-s) | Leaf");
    }

    public function listSurveys(){

        $this->set("title", "List Surveys | Leaf");
    }

    public function editSurvey($id = null){
        $this->set("title", "Edit Survey(-s) | Leaf");
    }

    public function deleteSurvey($id = null){
        
    }
}
