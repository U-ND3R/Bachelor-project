<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

class ClientsController extends AppController{
    
    public function initialize(): void{
        parent::initialize();
        $this->viewBuilder()->setLayout("admin");
    }

    public function addClient(){

        $this->set("title", "Create Client(-s) | Leaf");
    }

    public function listClients(){

        $this->set("title", "List Clients | Leaf");
    }

    public function editClient($id = null){
        $this->set("title", "Edit Client(-s) | Leaf");
    }

    public function deleteClient($id = null){
        
    }
}
