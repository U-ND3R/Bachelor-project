<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

class QuestionsController extends AppController{
    
    public function initialize(): void{
        parent::initialize();
        $this->viewBuilder()->setLayout("admin");
    }

    public function addQuestion(){

        $this->set("title", "Create Question(-s) | Leaf");
    }

    public function listQuestions(){

        $this->set("title", "List Questions | Leaf");
    }

    public function editQuestion($id = null){
        $this->set("title", "Edit Question(-s) | Leaf");
    }

    public function deleteQuestion($id = null){
        
    }
}