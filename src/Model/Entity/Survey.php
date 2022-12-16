<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Survey extends Entity
{
    protected $_accessible = [
        "company_id" => true,
        "name" => true,
        "description" => true,
        "number_of_questions" => true,
        "status" => true,
        "created" => true,
        "modified" => true
    ];
}
