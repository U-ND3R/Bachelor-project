<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

class ResponcesController extends AppController{
    
    public function initialize(): void{
        parent::initialize();
        $this->viewBuilder()->setLayout("admin");
    }

    public function listResponces(){

        $this->set("title", "List Responces | Leaf");
    }
}