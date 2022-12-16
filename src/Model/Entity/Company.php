<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Company extends Entity
{
    protected $_accessible = [
        "name" => true,
        "company_code" => true,
        "email" => true,
        "description" => true,
        "status" => true,
        "created" => true,
        "modified" => true
    ];
}
