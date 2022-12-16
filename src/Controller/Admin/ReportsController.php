<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

class ReportsController extends AppController{

    public function initialize(): void{
        parent::initialize();
        $this->viewBuilder()->setLayout("admin");
    }
    
    public function listReports(){

        $this->set("title", "List Reports | Leaf");
    }

    public function deleteReport($id = null){
        
    }
}
